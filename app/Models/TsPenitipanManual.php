<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TsPenitipanManual extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name', 'animal_type', 'animal_gender', 'animal_color', 'tanggal_pengembalian', 'note', 'price'
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
