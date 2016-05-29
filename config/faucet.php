<?php
/**
 * Faucet configuration
 */

return [
    'domain'    => env('FAUCET_DOMAIN'),
    'name'      => env('FAUCET_NAME'),
    'payment'   => env('FAUCET_PAYMENT'),
    'timer'     => env('FAUCET_TIMER'),
    'refferal'  => env('FAUCET_REFFERAL'),
    'payout'    => env('FAUCET_PAYOUT'),
    'ads_block' => [
        'left_vert'  => '
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- vert_1 -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:160px;height:600px"
                 data-ad-client="ca-pub-4824116758701929"
                 data-ad-slot="4426000492"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        ',
        'right_vert' => '
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- right_vert -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:160px;height:600px"
                 data-ad-client="ca-pub-4824116758701929"
                 data-ad-slot="8856200091"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        ',
        'home'       => [
            'top' => '
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- home_top -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-4824116758701929"
                     data-ad-slot="1332933294"
                     data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            ',
        ],
        'list'       => [
            'big' => '
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- list_big -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:300px;height:600px"
                     data-ad-client="ca-pub-4824116758701929"
                     data-ad-slot="2809666493"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            ',
        ]
    ]
];