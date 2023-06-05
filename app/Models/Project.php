<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'repositoryUrl', 'starting_date'];

    public static function createRepositoryUrl($projectName) {
        $repositoryUrl = 'https://github.com/mattiavolpe/' . Str::slug($projectName, '-');
        return $repositoryUrl;
    }
}
