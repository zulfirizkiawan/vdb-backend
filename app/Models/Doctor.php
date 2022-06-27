<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'workplace', 'doctor_specialist', 'gender ', 'phoneNumber ', 'price ',
        'doctor_photo_path'
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }

    public function getUpdateAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }

    public function getDoctorPathAttribute()
    {
        return url('') . Storage::url($this->attributes['doctor_photo_path']);
    }
}
