<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teach = new \App\Models\Admin\AdminUser();
        $teach->id = 1;
        $teach->user_id = 1;
        $teach->userable_type = "App\Models\TeachBaseInfo";
        $teach->name = 'teach';
        $teach->email = 'teach@teach.com';
        $teach->password = bcrypt('teach');
        $teach->role_id = 1;
        $teach->save();

        $student = new \App\Models\Admin\AdminUser();
        $student->id = 2;
        $student->user_id = 1;
        $student->userable_type = "App\Models\StudentBaseInfo";
        $student->name = 'student';
        $student->email = 'student@student.com';
        $student->password = bcrypt('student');
        $student->role_id = 2;
        $student->save();
    }
}
