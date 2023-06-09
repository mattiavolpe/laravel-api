<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public static function generateSlug($typeName) {
        $slug = Str::slug($typeName, '-');
        return $slug;
    }

    public function projects(): BelongsToMany {
        return $this->belongsToMany(Project::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
