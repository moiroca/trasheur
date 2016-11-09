<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Utilities\Constant;

class AdminAccountSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAccount = User::where([
            'email' => 'admin@trashure.com',
        ])->first();

        if ( ! $userAccount ) {
            $userAccount = User::create([
            	'name'      => 'Admin',
                'email'     => 'admin@trashure.com',
                'password'  => bcrypt('trashure2016'),
                'user_type' => Constant::ADMIN_ROLE,
                'location'	=> '',
				'contact'	=> ''
            ]);
        }
    }
}
