<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;

    protected $table = 'C##username.USERS';
    protected $primaryKey = 'ID';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'ID',
        'NAME',
        'EMAIL',
        'PASSWORD', // Ensure this matches the database column name
    ];

    protected $hidden = [
        'PASSWORD', // Hide password for security
    ];

    // Manually map the PASSWORD field
    public function getAuthPassword()
    {
        return $this->attributes['password']; // Explicitly use the attribute array
    }
    
}