<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteVehicleInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'quote_id',
        'year',
        'make',
        'model',
    ];

    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }
}
