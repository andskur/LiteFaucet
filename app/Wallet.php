<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Wallet extends Model
{

    protected $table = 'wallets';

    protected $fillable = [
        'user_id',
        'balance',
        'total',
        'refferal'
    ];

    protected $appends = [ 'timer' ];


    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }


    public function getTimerAttribute()
    {
        $timer = config('faucet.timer');

        $pr_time      = new Carbon($this->last_payment);
        $pr_time_diff = Carbon::now()->diffInMinutes($pr_time);
        $end_time     = $timer - $pr_time_diff;

        return $end_time;
    }
}
