<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'admins';
    protected $guard = 'admin';

    protected $fillable = ['admin_name', 'admin_username', 'admin_password', 'admin_email'];

    public function getAuthPassword()
    {
        return $this->admin_password;
    }
}
