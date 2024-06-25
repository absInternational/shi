<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class NewsletterSubscribers extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'email',
        'status',
        'comment',
    ];

    protected $dates = ['deleted_at'];
}
