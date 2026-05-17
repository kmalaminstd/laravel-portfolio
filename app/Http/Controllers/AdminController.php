<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\TechStack;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function dashboard(){
        return view('admin.index');
    }

    public function project(){
        return view('admin.projects');
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
