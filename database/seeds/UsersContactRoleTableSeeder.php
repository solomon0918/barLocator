<?php

use Illuminate\Database\Seeder;

class UsersContactRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lk_contact_role')->delete();
        $contacts_role = [
            [
                'contact_role_description' => 'Primary'
            ],
            [
                'contact_role_description' => 'Secondary'
            ]
        ];

        DB::table('lk_contact_role')->insert($contacts_role);
    }
}
