<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Process;

class ProcessController extends Controller
{
    
    public function create(Project $project, Request $request){

        // dd($request);

        $request->validate([
            "name" => "required",
            "description" => "required"
        ]);

        $project->process()->create([
            "name" => $request->name,
            "description" => $request->description
        ]);

        return back();

    }

    public function destroy(Process $process){
        $process->delete();
        return back();
    }

}
