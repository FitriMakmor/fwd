<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public static $laracombee = ['gender' => 'string', 'birthdate' => 'timestamp', 'is_citizen' => 'boolean', 'is_married' => 'boolean', 'prefer_flexible' => 'boolean', 'income_range' => 'string', 'hasDisease1' => 'boolean', 'hasDisease2' => 'boolean', 'hasDisease3' => 'boolean', 'hasDisease4' => 'boolean', 'hasDisease5' => 'boolean', 'admittance_freq' => 'string', 'travel_freq' => 'string'];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'birthdate',
        'is_citizen',
        'is_married',
        'prefer_flexible',
        'income_range',
        'hasDisease1',
        'hasDisease2',
        'hasDisease3',
        'hasDisease4',
        'hasDisease5',
        'admittance_freq',
        'travel_freq',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
