<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'type_id', 'name', 'slug', 'repositoryUrl', 'starting_date'];

    public static function generateSlug($projectName) {
        $slug = Str::slug($projectName, '-');
        return $slug;
    }

    public static function generateRepositoryUrl($slug) {
        $repositoryUrl = 'https://github.com/mattiavolpe/' . $slug;
        return $repositoryUrl;
    }

    public function type(): BelongsTo {
        return $this->belongsTo(Type::class);
    }

    public function technologies(): BelongsToMany {
        return $this->belongsToMany(Technology::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
