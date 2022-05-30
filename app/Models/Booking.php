<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function user()
    {
        $this->hasMany(User::class, 'user_id');
    }

    public function admin()
    {
        $this->hasMany(Admin::class, 'admin_id');
    }

    public function field()
    {
        $this->hasOne(Field::class, 'field_id');
    }

    public function price()
    {
        $this->hasMany(Price::class, 'price_id');
    }
}
