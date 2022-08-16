<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{HasMany,BelongsTo};
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;

    public function upazilas():HasMany
    {
        return $this->hasMany(Upazila::class);
    }
    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
}
