<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class TransactionPenitipan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 'animal_name', 'animal_type', 'descendants', 'animal_gender', 'note',
        'penitipan_photo_path', 'tanggal_pengembalian', 'payment_url', 'status', 'sub_total', 'shipping_cost',
        'discount', 'total'
    ];

    protected $appends = [
        'penitipan_photo_path',
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

    public function getPenitipanPhotoPathAttribute()
    {
        return url('') . Storage::url($this->attributes['penitipan_photo_path']);
    }
}
