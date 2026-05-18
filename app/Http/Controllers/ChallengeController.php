<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Challenge;

class ChallengeController extends Controller
{

    public function create(Project $project, Request $request){

        $request->validate([
            "description" => "required"
        ]);

        $project->challenge()->create([
            "description" => $request->description
        ]);

        return back();

    }

    public function destroy(Challenge $challenge){
        $challenge->delete();
        return back();
    }

}
