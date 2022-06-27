<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class TransactionPraktik extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 'animal_name', 'animal_type', 'descendants', 'animal_gender', 'note',
        'praktik_photo_path', 'first_symptom', 'second_symptom', 'doctor_id', 'payment_url',
        'status', 'sub_total', 'shipping_cost', 'discount', 'total'
    ];

    protected $appends = [
        'praktik_photo_path',
    ];

    public function doctor()
    {
        return $this->hasOne(Doctor::class, 'id', 'doctor_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }

    public function getUpdateAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }

    public function getPraktikPhotoPathAttribute()
    {
        return url('') . Storage::url($this->attributes['praktik_photo_path']);
    }
}
