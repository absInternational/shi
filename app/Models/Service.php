<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'banner_image',
        'image2',
        'image3',
        'heading_one',
        'desc_one',
        'heading_two',
        'desc_two_one',
        'desc_two_two',
        'desc_two_three',
        'desc_two_four',
        'desc_two_five',
        'desc_two_six',
        'extra',
        'category_id',
        'status',
        'name',
        'display_name',
        'slug',
        'meta_title',
        'meta_description',
        
    ];

    protected $dates = ['deleted_at'];
    
    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
}
