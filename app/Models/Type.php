<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'user_id'];

    public static function generateSlug($typeName) {
        $slug = Str::slug($typeName, '-');
        return $slug;
    }

    public function projects(): HasMany {
        return $this->hasMany(Project::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
