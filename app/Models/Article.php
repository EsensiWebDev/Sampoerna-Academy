<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Article extends Model
{
    use HasFactory;

    // Allow mass assignment for all attributes
    protected $guarded = [];

    // Mutator for the thumbnail attribute
    public function setThumbnailAttribute($value)
    {
        $this->attributes['thumbnail'] = $value ? ltrim(str_replace('/storage/', '', $value), '/') : null;
    }

    // Accessor to retrieve full path
    public function getThumbnailAttribute($value)
    {
        return $value ? '/storage/' . ltrim($value, '/') : null;
    }
}
