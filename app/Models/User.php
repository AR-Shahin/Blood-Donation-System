<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];
        protected $guarded = [];
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

    public function blood_requests():HasMany
    {
        return $this->hasMany(BloodRequest::class);
    }
}
