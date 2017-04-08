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

        $student->name_spell = "2";
        $student->student_QQ = "2";
        $student->student_phone = "2";
        $student->name_before = "2";
        $student->sex_code = "2";
        $student->birthday = "2";
        $student->birth_addr_code = "2";
        $student->native_place = "2";
        $student->nation_code = "2";
        $student->nationility_code = "2";
        $student->identity_type = "2";
        $student->identity_number = "2";
        $student->marriage_states_code = "2";
        $student->conuntrymen_code = "2";
        $student->politics_status = "2";
        $student->health_status = "2";
        $student->religion = "2";
        $student->blood_type = "2";
        $student->photo = "2";
        $student->identity_valid = "2";
        $student->save();
    }
}
