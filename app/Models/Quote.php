<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'available_at_auction',
        'link',
        'name',
        'phone',
        'email',
        'trailer_type',
        'condition',
        'modification',
        'modify_info',
        'image',
        'origin',
        'origin_zip',
        'origin_state',
        'origin_city',
        'destination',
        'destination_zip',
        'destination_state',
        'destination_city',
    ];

    public function vehicles()
    {
        return $this->hasMany(QuoteVehicleInfo::class);
    }
}
