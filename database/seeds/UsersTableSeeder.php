<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       

        $admin = \App\Models\Role::where('name', '=', config('roles.admin'))->first();
        //dd($admin);
        \App\Models\User::create([
				
            'role_id' => $admin->id,
            'name' => 'Admin',
				'surname' => 'Adminovich',
				'email' => 'admin@admin.com',
				'balance' => 50000.00,
				'social_account_id' => 2123121,
				'provider' => 'google',
				'phone' => '3323323322',
				'birth_date' => '1980-12-12',
				'password' =>'test123456fff'



        ]);

        factory(\App\Models\User::class, 3)->create();
       
    }
}
