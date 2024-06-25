<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Blog extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'post_name',
        'slug_name',
        'post_image',
        'post_description',
        'post_short_description',
        'meta_title',
        'canonical_url',
        'meta_keyword',
        'meta_description',
        'status',
        'category',
    ];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
