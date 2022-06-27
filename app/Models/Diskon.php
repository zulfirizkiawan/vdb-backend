<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 'price_discount', 'turn_off'
    ];


    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }

    public function getUpdateAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
}
