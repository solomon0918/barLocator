<?php

use Illuminate\Database\Seeder;

class UsersRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_role')->delete();
        $users_role = [
            [
                'role_description' => 'Administrator'
            ],
            [
                'role_description' => 'User'
            ]
        ];

        DB::table('users_role')->insert($users_role);
    }
}
