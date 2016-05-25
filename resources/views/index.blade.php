@extends('layouts.app')
@section('title-block')
    <h1>Our Faucet</h1>
    <h2 class="subheader">We pay {{config('faucet.payment')}} ethereum every {{config('faucet.timer')}}
        minutes!</h2>
@stop
@section('content')
    <div class="row medium-8 large-7 columns">
        {{--<div class="blog-post">--}}
        @if (Auth::guest())
            <div class="sign-block">
                <div class="row">
                    <div class="medium-3 medium-offset-2 columns">
                        <a class="large button" data-open="signInModal">Sign In</a>
                    </div>
                    <div class="medium-2 columns">
                        <h2>Or</h2>
                    </div>
                    <div class="medium-3 columns">
                        <a class="large button" data-open="signUpModal">Sign Up</a>
                    </div>
                    <div class="medium-2 columns"></div>
                    {{--<div class="medium-3 columns">
                        <a class="large button" href="#">Sign Up</a>
                    </div>--}}
                </div>
            </div>
        @else
            <div class="faucet-block text-center">
                @if(Session::has('message'))
                    <div class="callout succsess">
                        <p>{{Session::get('message')}}</p>
                    </div>
                @endif
                @if (Auth::user()->wallet and Auth::user()->wallet->timer > 0)
                    <button disabled class="large button">WAIT {{Auth::user()->wallet->timer}} MINUTES</button>
                @else
                    <form method="post" action="{{action('MainFaucetController@paymentFaucet')}}">
                        {{csrf_field()}}
                        <button type="submit" class="large button">GET ETHERIUM!</button>
                    </form>
                @endif
                <h4>Your refferal link - <code>http://etherium/{{Auth::user()->name}}</code></h4>
                <p><i>{{config('faucet.refferal')}}% refferal payments!</i></p>
            </div>
        @endif
        <div class="text-block">
            {{--<h3>Etherium coins:</h3>--}}
            {{--<img class="thumbnail" src="http://placehold.it/850x350">--}}
            <p>Ethereum is a decentralized platform that runs smart contracts: applications that run exactly as
                programmed without any possibility of downtime, censorship, fraud or third party interference.</p>
            <p>These apps run on a custom built blockchain, an enormously powerful shared global infrastructure that can
                move value around and represent the ownership of property. This enables developers to create markets,
                store registries of debts or promises, move funds in accordance with instructions given long in the past
                (like a will or a futures contract) and many other things that have not been invented yet, all without a
                middle man or counterparty risk.</p>
            {{--<div class="callout">
                <ul class="menu simple">
                    <li><a href="#">Etherium price</a></li>
                    <li><a href="#">Etherium volume</a></li>
                </ul>
            </div>--}}
        </div>
        <div class="blog-post">
            <h3>Ethereum video</h3>
            <div {{--class="video-player"--}} id="video-ethereum"></div>
            <p>The project was crowdfunded during August 2014 by fans all around the world. It is developed by the
                Ethereum Foundation, a Swiss nonprofit, with contributions from great minds across the globe.</p>
        </div>
        {{--<div class="blog-post">
            <h3>Awesome blog post title
                <small>3/6/2015</small>
            </h3>
            <img class="thumbnail" src="http://placehold.it/850x350">
            <ul class="tabs" data-tabs id="example-tabs">
                <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Tab 1</a></li>
                <li class="tabs-title"><a href="#panel2">Tab 2</a></li>
            </ul>
            <div class="tabs-content" data-tabs-content="example-tabs">
                <div class="tabs-panel is-active" id="panel1">
                    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend
                        nibh
                        porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.
                        Suspendisse dictum feugiat nisl ut dapibus.</p>
                </div>
                <div class="tabs-panel" id="panel2">
                    <p>Suspendisse dictum feugiat nisl ut dapibus. Vivamus hendrerit arcu sed erat molestie vehicula. Ut in
                        nulla
                        enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Sed auctor neque eu
                        tellus
                        rhoncus ut eleifend nibh porttitor.</p>
                </div>
            </div>
        </div>--}}
    </div>
@stop

@push('scripts')
<script>
    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    //    var player;
    function onYouTubeIframeAPIReady() {
        new YT.Player('video-ethereum', {
            height: '390',
            width: '640',
            videoId: 'j23HnORQXvs'
            /*events: {
             'onReady': onPlayerReady,
             'onStateChange': onPlayerStateChange
             }*/
        });
    }
</script>
@endpush