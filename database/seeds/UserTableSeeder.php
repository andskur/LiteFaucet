<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => 'admin',
            'email'    => 'admin@admin.com',
            'password' => bcrypt('nfhfrfy2'),
            'address'  => '1JPAEqkkHWDL6FnVBm6ZWQ47ygKrJEb54S',
        ]);
    }
}
