<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Wallet;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
use Request;
use App\User;
use Session;

class MakePayment extends Job implements ShouldQueue
{

    use InteractsWithQueue, SerializesModels;

    protected $user;

    protected $time;

    protected $refferal;

    protected $wallet;

    protected $reward;

    protected $refreward;

    /**
     * @param Site       $site
     * @param            $ip
     * @param            $address
     * @param            $payment
     * @param bool|false $refferal
     */
    //public function __construct(Site $site, $ip, $address, $payment, $refferal = false)
    public function __construct(User $user)
    {
        $this->user   = $user;
        $this->time   = Carbon::now();
        $this->wallet = Wallet::firstOrCreate([ 'user_id' => $this->user->id ]);

        $this->reward = config('faucet.payment');

        $this->refreward = $this->reward * 50 / 100;

        if ($this->user->refferal) {
            $this->refferal = Wallet::firstOrCreate([ 'user_id' => $this->user->refferal->id ]);
        }

    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->wallet->balance      = $this->wallet->balance + $this->reward;
        $this->wallet->total        = $this->wallet->total + $this->reward;
        $this->wallet->last_payment = $this->time;
        $this->wallet->save();

        if ($this->refferal) {
            $this->refferal->balance  = $this->refferal->balance + $this->refreward;
            $this->refferal->refferal = $this->refferal->refferal + $this->refreward;
            $this->refferal->save();
        }
    }
}
