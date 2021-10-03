<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    public static $laracombee = ['name' => 'string', 'type' => 'string', 'tier' => 'int', 'annual_premium' => 'string', 'overall_annual_limit' => 'string', 'room_and_board' => 'string', 'room_category' => 'string', 'hospital_days' => 'string', 'cnd' => 'string', 'accidental_death' => 'string', 'iee' => 'string'];
}
