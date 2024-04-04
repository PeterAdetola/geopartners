<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(ProjectImgs::class);
    }
    // public function nextProject() {
    //   return $this->hasOne(Project::class)->where('id', '>', $this->id)->orderBy('id', 'asc')->limit(1);
    // }

    // public function previousProject() {
    //   return $this->hasOne(Project::class)->where('id', '<', $this->id)->orderBy('id', 'desc')->limit(1); 
    // }
}
