<?php

use Illuminate\Database\Seeder;

class UsersAddressRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lk_address_role')->delete();
        $address_role = [
            [
                'address_role_description' => 'Primary Address'
            ],
            [
                'address_role_description' => 'Secondary Address'
            ]
        ];

        DB::table('lk_address_role')->insert($address_role);
    }
}
