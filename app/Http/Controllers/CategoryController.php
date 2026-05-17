<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    

    public function create(Request $request){

        // dd($request); 

        $request->validate([
            "name" => 'required'
        ]);

        $slug = Str::slug($request->name);

        Category::create([
            "name" => $request->name,
            "slug" => $slug
        ]);

        return back();

    }

    public function edit(Category $category){
        return view('admin.category-edit', compact('category'));
    }

    public function update(Category $category, Request $request){

        $request->validate([
            "name" => 'required'
        ]);

        $slug = Str::slug($request->name);

        $category->update([
            "name" => $request->name,
            "slug" => $slug
        ]);

        return redirect('/admin/category');

    }

    public function destroy(Category $category){
        $category->delete();

        return redirect('/admin/category');
    }

}
