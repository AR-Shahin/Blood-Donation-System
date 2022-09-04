<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BloodRequest extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function upazila(): BelongsTo
    {
        return $this->belongsTo(Upazila::class);
    }

    public function blood(): BelongsTo
    {
        return $this->belongsTo(Blood::class);
    }

    public function donor(): BelongsTo
    {
        return $this->belongsTo(Donor::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function isDonorCanSeeThisRequest() :bool
    {
        if(is_null(auth('donor')->user()->last_donation)){
            return true;
        }
        $diff = difference_two_date($this->date,auth('donor')->user()->last_donation);
        return $diff >= 90 ? true : false;
    }

    public function getTimeAttribute()
    {
        return Carbon::parse($this->attributes['time'])->format('h:i A');
    }
}
