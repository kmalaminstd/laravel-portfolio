<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\MyInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class MyInfoController extends Controller
{
    
    public function create(Request $request)
    {
        // dd($request);
        $attributes = $request->validate([
            "email" => "nullable|email",
            "resume" => "nullable|file",
            "image" => "nullable|image",
            "linkedin" => "nullable",
            "github" => "nullable",
            "location" => "nullable",
            "twitter" => "nullable",
            "whatsapp" => "nullable",
        ]);

        // Resume Upload
        if ($request->hasFile('resume')) {

            $path = $request->file('resume')->store('resumes', 'public');

            $attributes['resume'] = $path;
        }

        // Image Upload
        if ($request->hasFile('image')) {

            $path = $request->file('image')->store('media', 'public');

            $media = Media::create([
                "src" => $path
            ]);

            $attributes['media_id'] = $media->id;
        }

        // Save MyInfo
        MyInfo::updateOrCreate(
            ['id' => 1],
            Arr::except($attributes, 'image')
        );

        return back()->with('success', 'Info created successfully');
    }

}
