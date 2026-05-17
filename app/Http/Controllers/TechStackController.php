<?php

namespace App\Http\Controllers;

use App\Models\TechStack;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TechStackController extends Controller
{
    
    public function create(Request $request){

        $request->validate([
            "name" => 'required',
            "icon" => "required"
        ]);

        $slug = Str::slug($request->name);

        TechStack::create([
            "name" => $request->name,
            "icon" => $request->icon,
            "slug" => $slug
        ]);

        return back();
    }

    public function edit(TechStack $techstack){
        return view('admin.tech-stack-edit', compact('techstack'));
    }

    public function update(TechStack $techstack, Request $request){

        $request->validate([
            "name" => 'required',
            "icon" => "required"
        ]);

        $slug = Str::slug($request->name);

        $techstack->update([
            "name" => $request->name,
            "icon" => $request->icon,
            "slug" => $slug
        ]);

        return redirect("/admin/tech-stack");
    }

    public function delete(TechStack $techstack){
        $techstack->delete();
        return back();
    }

}
