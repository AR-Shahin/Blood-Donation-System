<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Donor extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function sendPasswordResetNotification($token)
    // {
    //     $this->notify(new AdminResetPasswordNotification($token));
    // }
    public function upazila(): BelongsTo
    {
        return $this->belongsTo(Upazila::class);
    }
    public function blood(): BelongsTo
    {
        return $this->belongsTo(Blood::class);
    }

    public static function userDesireAvailableDonors($blood,$upazila)
    {
        return self::whereBloodId($blood)
            ->whereUpazilaId($upazila)
            ->where('last_donation',"<",Carbon::now()
                                            ->subMonth(3)
                                            ->format('Y-m-d'))
            ->latest()->get();
    }

    function availableDonors(){
        return $this->where('last_donation',"<",Carbon::now()
                                            ->subMonth(3)
                                            ->format('Y-m-d'))->get();
    }


    public function blood_requests():HasMany
    {
        return $this->hasMany(BloodRequest::class);
    }

}
