<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTechStack extends Model
{
    protected $guarded = [];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function techStack(){
        return $this->belongsTo(TechStack::class);
    }
}
