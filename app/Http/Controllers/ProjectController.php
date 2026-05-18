<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Media;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectMedia;
use App\Models\TechStack;
use Illuminate\Support\Facades\Storage;

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

    public function edit(Project $project){

        $project->load(['category']);

        $categories = Category::latest()->get();
        $techStacks = TechStack::latest()->get();

        
        return view('admin.project-edit', compact(['project', 'categories', 'techStacks']));

    }

    public function update(Project $project, Request $request)
    {
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

        // upload new feature image
        if ($request->hasFile('feature_image')) {

            $path = $request->file('feature_image')->store('media', 'public');

            // get featured media
            $projectMedia = $project->projectMedia()
                ->with('media')
                ->first();

            if ($projectMedia && $projectMedia->media) {

                // delete old image
                Storage::disk('public')->delete($projectMedia->media->src);

                // update media
                $projectMedia->media->update([
                    'src' => $path
                ]);

            } else {

                // create new media
                $media = Media::create([
                    'src' => $path,
                    'featured' => true
                ]);

                ProjectMedia::create([
                    'project_id' => $project->id,
                    'media_id' => $media->id
                ]);
            }
        }

        // update project
        $project->update([
            'title' => $attributes['title'],
            'category_id' => $attributes['category_id'],

            'status' => $attributes['status'] === 'published' ? 1 : 0,

            'live_link' => $attributes['live_link'] ?? null,
            'github_link' => $attributes['github_link'] ?? null,

            'short_summary' => $attributes['short_summary'],
            'description' => $attributes['description'],
        ]);

        // sync tech stacks
        $project->techStacks()->sync($request->tech_id ?? []);

        return redirect()
            ->back()
            ->with('success', 'Project updated successfully');
    }

    public function details(Project $project){
        return view('home.project', compact(['project']));
    }

    public function destroy(Project $project){

        $project->delete();
        return back();

    }


}
