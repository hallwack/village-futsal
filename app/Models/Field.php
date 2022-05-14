<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Field extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function price()
    {
        $this->hasMany(Price::class, 'price_id');
    }

    public function booking()
    {
        $this->belongsTo(Booking::class);
    }
}
