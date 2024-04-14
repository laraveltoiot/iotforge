<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Device extends Model
{
   // use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'device_type',
        'device_identifier',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
