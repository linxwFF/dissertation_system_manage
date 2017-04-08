<?php

use Illuminate\Database\Seeder;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //学生角色
        $student_role = new App\Models\Admin\Role();
        $student_role->id = 1;
        $student_role->name = "教职工";
        $student_role->description = "教职工描述";
        $student_role->model_type = "App\Models\StudentBaseInfo";
        $student_role->save();

        //教师角色
        $teach_role = new App\Models\Admin\Role();
        $teach_role->id = 2;
        $teach_role->name = "学生狗";
        $teach_role->description = "学生狗描述";
        $teach_role->model_type = "App\Models\TeachBaseInfo";
        $teach_role->save();

    }
}
