<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\TechStack;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home(){
        $projects = Project::latest()->where('status', true)->take(2)->get();
        $techs = TechStack::all();
        // dd($techs);
        return view('home.index', compact(['projects', 'techs']));
    }

    public function contact(){
        return view('home.contact');
    }



    public function projects(){
        $projects = Project::latest()->where("status", true)->paginate(30);
        $categories = Category::get();
        
        return view('home.projects', compact(['projects', 'categories']));
    }

    public function services(){
        return view('home.services');
    }

}
