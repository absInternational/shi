<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FAQs extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'faqs';

    protected $fillable = [
        'heading',
        'description',
        'status',
    ];

    protected $dates = ['deleted_at'];
}
