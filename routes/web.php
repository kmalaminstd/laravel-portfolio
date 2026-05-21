<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TechStackController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MyInfoController;
use App\Http\Controllers\ProcessController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'home');
    // Route::get('/services', 'services');
    Route::get('/projects', 'projects');
    Route::get('/contact', 'contact');
});

Route::controller(ContactController::class)->group(function(){
    Route::post('/contact', 'create');
});

Route::controller(SessionController::class)->group(function(){
    Route::get('/login', 'login')->middleware('guest')->name('login');
    Route::post('/login', 'create')->middleware('guest');
    Route::post('/logout', 'logout')->middleware('auth');
});

Route::controller(ProjectController::class)->group(function(){
    Route::get('/project/{project}', 'details');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function(){

    Route::controller(AdminController::class)->group(function(){
        Route::get('/', 'dashboard');
        Route::get('/category', 'category');
        Route::get('/project', 'project');
        Route::get('/seo', 'seo');
        Route::get('/tech-stack', 'techStack');
        Route::get('/messages', 'messages');
        Route::get('/general', 'general');
    });

    Route::controller(CategoryController::class)->group(function(){
        Route::post('/category', 'create');
        Route::get('/category/{category}/edit', 'edit');
        Route::patch('/category/{category}/update', 'update');
        Route::delete('/category/{category}/delete', 'destroy');
    });

    Route::controller(TechStackController::class)->group(function(){
        Route::post('/tech-stack', 'create');
        Route::get('/tech-stack/{techstack}/edit', 'edit');
        Route::patch('/tech-stack/{techstack}/update', 'update');
        Route::delete('/tech-stack/{techstack}/delete', 'delete');
    });

    Route::controller(ProjectController::class)->group(function(){
        Route::post('/project', 'create');
        Route::post('/project/images/{project}/add-multiple', 'addImages');
        Route::delete('/project/image/{projectmedia}/delete', 'deleleImage');
        Route::get('/project/{project}/edit', 'edit');
        Route::patch('/project/{project}/update', 'update');
        Route::delete('/project/{project}/delete', 'destroy');
    });

    Route::controller(FeatureController::class)->group(function(){
        Route::post("/feature/{project}", 'create');
        Route::delete("/feature/{feature}/delete", 'destroy');
    });

    Route::controller(ProcessController::class)->group(function(){
        Route::post("/process/{project}", 'create');
        Route::delete("/process/{process}/delete", 'destroy');
    });

    Route::controller(ChallengeController::class)->group(function(){
        Route::post("/challenge/{project}", 'create');
        Route::delete("/challenge/{challenge}/delete", 'destroy');
    });

    Route::controller(MyInfoController::class)->group(function(){
        Route::post('/general', 'create');
    });

    Route::controller(ContactController::class)->group(function(){
        Route::delete('/contact/{contact}/delete', 'destroy');
    });

});