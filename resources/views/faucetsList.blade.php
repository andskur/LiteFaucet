@extends('layouts.app')
@section('title-block')
    <h1>Need more ethereum?</h1>
    <h2>Check our Ethereum faucets list</h2>
@stop
@section('content')
    <div class="row medium-8 large-7 columns">
        <div class="medium-4 columns">
            <ul>
                @foreach($list as $faucet)
                    <li><a href="{{$faucet->link}}" target="_blank">{{ $faucet->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="medium-8 columns">

        </div>
        {{--<div class="medium-6 columns">

        </div>--}}
    </div>
    {{--<div class="row medium-8 large-7 columns" style="text-align: center">
        @foreach($list->chunk(4) as $faucets)
            <div class="row">
                @foreach($faucets as $faucet)
                    <a href="{{$faucet->link}}" target="_blank">{{ $faucet->name }}</a>
                @endforeach
            </div>
        @endforeach
    </div>--}}
    {{--@foreach ($list->chunk(3) as $faucets)
        <ul class="menu">
            @foreach ($faucets as $faucet)
                <li><a href="{{$faucet->link}}" target="_blank">{{ $faucet->name }}</a></li>
            @endforeach
        </ul>
    @endforeach--}}
@stop