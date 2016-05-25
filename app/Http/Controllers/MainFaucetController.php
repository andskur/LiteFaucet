<?php

namespace App\Http\Controllers;

use App\Jobs\MakePayment;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Session;

class MainFaucetController extends Controller
{

    public $user;

    public $refferal;


    public function __construct(User $user, $refferal = false)
    {
        $this->user = Auth::user();
        if ($refferal) {
            $this->refferal = User::find($refferal);
        }
    }


    public function getFaucet($refferal = false)
    {
        if ($refferal) {
            $refferal = User::where('name', $refferal)->firstOrFail();

            if ($refferal) {
                Session::set('refferal', $refferal->id);
            }
        }

        return view('index');
    }


    public function paymentFaucet()
    {
        $this->dispatch(new MakePayment($this->user));

        return back()->with('message', 'You got payment!');
    }
}
