<?php

use Illuminate\Database\Seeder;

class UsersAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_address')->delete();
        $users_address = [
            [
                'user_id' => 'eanora',
	        	'street' => '4081 Leroy Lane',
	        	'city' => 'Rapid City',
	        	'country' => 'United States of America',
	        	'zip_code' => '57702',
	        	'address_role_id' => 1,
	        	'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('users_address')->insert($users_address);
    }
}
