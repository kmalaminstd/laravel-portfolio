<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home(){
        $projects = Project::latest()->where('status', true)->take(2)->get();
        return view('home.index', compact(['projects']));
    }

    public function contact(){
        return view('home.contact');
    }



    public function projects(){
        $projects = Project::latest()->where("status", true)->paginate(30);
        return view('home.projects', compact(['projects']));
    }

    public function services(){
        return view('home.services');
    }

}
