<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'reviews';

    protected $fillable = [
        'site_name',
        'profile_url',
        'rating',
        'number_of_reviews',
        'review_date',
        'person_name',
        'rating_url',
        'description',
        'type',
    ];

    protected $dates = ['deleted_at'];

}
