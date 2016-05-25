<?php

use Illuminate\Database\Seeder;

class FaucetsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faucets')->insert([
            'name' => 'faucether.org',
            'link' => 'http://faucether.org/index.php?r=0xd5a809acf701274d726d00bb4dd8dd01df28e5e6',
        ]);
        DB::table('faucets')->insert([
            'name' => 'faucether.net',
            'link' => 'http://faucether.net/index.php?r=http://www.faucether.org/index.php?r=0xd5a809acf701274d726d00bb4dd8dd01df28e5e6',
        ]);
        DB::table('faucets')->insert([
            'name' => 'ethereum-faucet.com',
            'link' => 'http://ethereum-faucet.com/?r=25248',
        ]);
        DB::table('faucets')->insert([
            'name' => 'freeeth.com',
            'link' => 'http://freeeth.com/?r=25248',
        ]);
        DB::table('faucets')->insert([
            'name' => 'etherfree.com',
            'link' => 'http://etherfree.com/?r=25248',
        ]);
        DB::table('faucets')->insert([
            'name' => 'eth-faucet.com',
            'link' => 'http://eth-faucet.com?r=0x0f3c10da67c0899f08aa9db820a5bf5477908091',
        ]);
        DB::table('faucets')->insert([
            'name' => 'ethereumfaucet.net',
            'link' => 'http://ethereumfaucet.net/index.php?r=0xd5a809acf701274d726d00bb4dd8dd01df28e5e6',
        ]);
    }
}
