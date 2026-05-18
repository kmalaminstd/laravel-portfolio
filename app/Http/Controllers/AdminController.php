<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\TechStack;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function dashboard(){
        return view('admin.index');
    }

    public function project(){

        $techStacks = TechStack::latest()->get();
        $categories = Category::latest()->get();
        $projects = Project::latest()->with(['category', 'projectMedia', 'challenge', 'feature', 'process', 'projectMedia'])->paginate(30);

        return view('admin.projects', compact(['techStacks', 'categories', 'projects']));
    }

    public function category(){
        $categories = Category::latest()->get();
        return view('admin.category', compact(['categories']));
    }

    public function seo(){
        return view('admin.seo');
    }

    public function techStack(){
        $techStacks = TechStack::latest()->get();
        return view('admin.tech-stack', compact('techStacks'));
    }

    public function messages(){
        return view('admin.messages');
    }

    public function general(){
        return view('admin.general');
    }

}
