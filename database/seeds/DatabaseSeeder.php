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
            $this->call(AdminInitSeeder::class);
            $this->command->info('init AdminInitSeeder success!');
        }else{
            $this->command->info(" now don't seed data");
        }
    }
}
