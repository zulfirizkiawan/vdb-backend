<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TsPraktikManual extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name', 'animal_type', 'animal_gender', 'animal_color', 'first_symptom', 'second_symptom', 'doctor_id', 'note', 'price'
    ];

    public function doctor()
    {
        return $this->hasOne(Doctor::class, 'id', 'doctor_id');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }

    public function getUpdateAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
}
