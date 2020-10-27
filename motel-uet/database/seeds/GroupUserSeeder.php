<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GroupUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_users')->insert([
            ['name' => 'Admin', 'group_name' => 'admin'],
            ['name' => 'User', 'group_name' => 'user']
        ]);
    }
}