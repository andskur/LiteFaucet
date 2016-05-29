@extends('layouts.app')
@section('title-block')
    <h1>Need more ethereum?</h1>
    <h2>Check our Ethereum faucets list</h2>
@stop
@section('content')
    <div class="medium-4 columns">
        <ul>
            @foreach($list as $faucet)
                <li><a href="{{$faucet->link}}" target="_blank">{{ $faucet->name }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="medium-8 columns">
        {!! config('faucet.ads_block.list.big') !!}
    </div>
@stop