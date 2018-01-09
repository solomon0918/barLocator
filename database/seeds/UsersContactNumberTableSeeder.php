<?php

use Illuminate\Database\Seeder;

class UsersContactNumberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_contact')->delete();
        $users_contact = [
            [
                'country_code' => '63',
                'contact_role_id' => 1,
                'number' => '9183832520',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('users_contact')->insert($users_contact);
    }
}
