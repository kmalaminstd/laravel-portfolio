<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Project;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function create(Project $project, Request $request){

        $request->validate([
            "name" => "required"
        ]);

        $project->feature()->create([
            "name" => $request->name
        ]);

        return back();

    }

    public function destroy(Feature $feature){
        $feature->delete();
        return back();
    }
}
