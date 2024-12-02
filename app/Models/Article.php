<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = [
        'slug',
        'title_indonesia',
        'title_english',
        'thumbnail',
        'content_indonesia',
        'content_english',
        'lang',  // Ensure 'lang' is fillable
        'isPublished',
        'link',
        'updated_at',
        'created_at',
    ];
}
