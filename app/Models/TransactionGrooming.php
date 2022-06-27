<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class TransactionGrooming extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 'animal_name', 'animal_type', 'descendants', 'animal_gender', 'note',
        'grooming_photo_path', 'packet_grooming', 'payment_url', 'status', 'sub_total', 'shipping_cost',
        'discount', 'total'
    ];

    protected $appends = [
        'grooming_photo_path',
    ];

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

    public function getGroomingPhotoPathAttribute()
    {
        return url('') . Storage::url($this->attributes['grooming_photo_path']);
    }
}
