<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectMedia extends Model
{
    protected $guarded = [];

    public function media(){
        return $this->belongsTo(Media::class);
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
