<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $first_init = User::find(1) ? false : true;
        //只在初次生成时，填充数据
        if ($first_init) {
            $this->call(UserTableSeeder::class);
            $this->command->info('init UserInfo success!');

            //生成 左侧菜单权限列表
            $this->call(AdminInitSeeder::class);
            $this->command->info('init AdminInitSeeder success!');

            //用户数据填充
            $this->call(AdminUserSeeder::class);
            $this->command->info('AdminUserSeeder seed success!');

            $this->call(StudentBaseInfoSeeder::class);
            $this->command->info('StudentBaseInfo seed success!');
            $this->call(TeachBaseInfoSeeder::class);
            $this->command->info('TeachBaseInfoSeeder seed success!');

            //角色数据填充，学生狗和教职工
            $this->call(AdminRoleSeeder::class);
            $this->command->info('AdminRoleSeeder seed success!');

        }else{
            $this->command->info(" now don't seed data");
        }

    }
}
