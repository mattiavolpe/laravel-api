<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'repositoryUrl', 'starting_date'];

    public static function generateSlug($projectName) {
        $slug = Str::slug($projectName, '-');
        return $slug;
    }

    public static function generateRepositoryUrl($slug) {
        $repositoryUrl = 'https://github.com/mattiavolpe/' . $slug;
        return $repositoryUrl;
    }
}
