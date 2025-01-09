<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'leads';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parents_name',
        'kids_name',
        'phone_number',
        'email',
        'province',
        'prev_curriculum',
        'school_choice',
        'grade_interested',
        'timeframe_visit',
        'comment',
    ];
}
