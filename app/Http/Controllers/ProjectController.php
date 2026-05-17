<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectMedia;

class ProjectController extends Controller
{
    
    public function create(Request $request){

        // dd($request);
        $attributes = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',

            'tech_id' => 'nullable|array',
            'tech_id.*' => 'exists:tech_stacks,id',

            'status' => 'required|in:published,draft',

            'live_link' => 'nullable|url',
            'github_link' => 'nullable|url',

            'short_summary' => 'required|string|max:1000',
            'description' => 'required|string',

            'feature_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // upload feature image
        $path = null;

        if ($request->hasFile('feature_image')) {

            $image = $request->file('feature_image');

            $path = $request->file('feature_image')->store('media', 'public');

        }

        $featuredMedia = Media::create([
            "src" => $path,
            "featured" => true
        ]);

        // create project
        $project = Project::create([
            'title' => $attributes['title'],
            'category_id' => $attributes['category_id'],

            'status' => $attributes['status'] === 'published' ? 1 : 0,

            'live_link' => $attributes['live_link'] ?? null,
            'github_link' => $attributes['github_link'] ?? null,

            'short_summary' => $attributes['short_summary'],
            'description' => $attributes['description'],
        ]);

        // attach tech stacks
        if ($request->tech_id) {
            $project->techStacks()->attach($request->tech_id);
        }

        ProjectMedia::create([
            "project_id" => $project->id,
            "media_id" => $featuredMedia->id
        ]);

        return redirect()
            ->back()
            ->with('success', 'Project created successfully');

    }

    public function edit(Project $project){}

    public function update(Project $project, Request $request){

    }

    public function delete(Project $project){

        $project->delete();
        return back();

    }


}
