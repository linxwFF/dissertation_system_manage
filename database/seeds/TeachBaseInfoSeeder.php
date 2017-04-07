<?php

use Illuminate\Database\Seeder;

class TeachBaseInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teach = new \App\Models\TeachBaseInfo();
        $teach->id = 1;
        $teach->name = 'root';
        $teach->email = 'root@teach.com';
        $teach->password = bcrypt('teach');

        $teach->unit_number = "1";
        $teach->name_spell = "1";
        $teach->teach_reasearch_room_ID = "1";
        $teach->name_before = "1";
        $teach->sex_code = "1";
        $teach->birthday = "1";
        $teach->birthday_addr_code = "1";
        $teach->native_place = "1";
        $teach->nation_code = "1";
        $teach->nationility_code = "1";
        $teach->identity_type = "1";
        $teach->identity_number = "1";
        $teach->identity_valid = "1";
        $teach->marriage_status_code = "1";
        $teach->countrymen_code = "1";
        $teach->health_status = "1";
        $teach->religion = "1";
        $teach->blood_type_code = "1";
        $teach->educationest_code = "1";
        $teach->culture_standard_code = "1";
        $teach->date_first_work = "1";
        $teach->data_come_school = "1";
        $teach->date_start_salary = "1";
        $teach->date_start_teach = "1";
        $teach->authorized_strength_code = "1";
        $teach->teach_staff_type_code = "1";
        $teach->teach_status_code = "1";
        $teach->record_number = "1";
        $teach->record_text = "1";
        $teach->current_state_code = "1";

        $teach->save();
    }
}
