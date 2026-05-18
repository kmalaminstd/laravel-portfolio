<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function techStacks()
    {
        return $this->belongsToMany(TechStack::class);
    }

    public function projectTechStack(){
        return $this->hasMany(ProjectTechStack::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function projectMedia(){
        return $this->hasMany(ProjectMedia::class);
    }
}
