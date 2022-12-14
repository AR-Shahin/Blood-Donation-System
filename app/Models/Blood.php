<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blood extends Model
{
    use HasFactory;

    protected $fillable = ["name"];

    public function donors(): HasMany
    {
        return $this->hasMany(Donor::class);
    }

    public function available_donors(){
        return $this->donors()->where('last_donation',"<",Carbon::now()
                                                    ->subMonth(3)
                                                    ->format('Y-m-d'));

    }

    public function available_donor_in_user_area()
    {
        return $this->donors()->where('last_donation',"<",Carbon::now()
                                                    ->subMonth(3)
                                                    ->format('Y-m-d'))
                                ->orWhere('last_donation',null)
                                ->whereUpazilaId(auth('user')->user()->upazila_id);
    }

}
