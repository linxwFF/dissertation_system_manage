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
        //
        $admin = new \App\Models\User();
        $admin->id = 1;
        $admin->name = 'LinxwFF';
        $admin->email = '874226876@admin.com';
        $admin->password = bcrypt('admin');
        $admin->save();
    }
}
