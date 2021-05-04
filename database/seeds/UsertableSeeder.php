<?php

use Illuminate\Database\Seeder;

class UsertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'user';
        $user->email = 'user@plan.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('123456789');
        $user->save();

        $user = new \App\User();
        $user->name = 'manager';
        $user->email = 'manager@plan.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('123456789');
        $user->is_manager=true;
        $user->save();
    }
}
