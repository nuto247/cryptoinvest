<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addinvest extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'investment_plan',
        'investment_amount',
        'investment_profit',
        'crypto_network',
        'status',
        'last_updated',
    ];

/*     public function updateInvestmentAmount()
    {
        if ($this->investment_plan == 'Bronze Plan') {

            $now = Carbon::now();

            $lastUpdated = Carbon::parse($this->last_updated);

            if ($now->diffInSeconds($lastUpdated) >= 60) {

                $intervals = $now->diffInMinutes($lastUpdated);
                $newAmount = $this->investment_amount * pow(1.086, $intervals);

                $this->investment_amount = $newAmount;
                $this->last_updated = $now;
                $this->save();

            }

        }

    } */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'investment_plan');
    }

}
