<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Admin();
        $admin->name = 'Anas';
        $admin->email = 'admin@plan.com';
        $admin->password = \Illuminate\Support\Facades\Hash::make('123456789');
        $admin->save();
    }
}
