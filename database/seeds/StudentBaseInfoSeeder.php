<?php

use Illuminate\Database\Seeder;

class StudentBaseInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new \App\Models\StudentBaseInfo();
        $student->id = 1;
        $student->name = 'root';
        $student->email = 'root@student.com';
        $student->password = bcrypt('student');

        $student->name_spell = '1';
        $student->student_QQ = "1";
        $student->student_phone = "1";
        $student->name_before = "1";
        $student->sex_code = "1";
        $student->birthday = "1";
        $student->birth_addr_code = "1";
        $student->native_place = "1";
        $student->nation_code = "1";
        $student->nationility_code = "1";
        $student->identity_type = "1";
        $student->identity_number = "1";
        $student->marriage_states_code = "1";
        $student->conuntrymen_code = "1";
        $student->politics_status = "1";
        $student->health_status = "1";
        $student->religion = "1";
        $student->blood_type = "1";
        $student->photo = "1";
        $student->identity_valid = "1";
        $student->save();
    }
}
