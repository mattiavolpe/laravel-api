<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public static function generateSlug($typeName) {
        $slug = Str::slug($typeName, '-');
        return $slug;
    }

    public function projects(): HasMany {
        return $this->hasMany(Project::class);
    }
}
