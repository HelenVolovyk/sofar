<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       
        $roles = config('roles');
        if (!empty($roles)) {
            foreach ($roles as $role) {
					 $createRoles[] = ['name' => $role];
					 //\App\Models\Role::create(['name' => $role]);
            }

            //dd($createRoles);
            DB::table('roles')->insert($createRoles);
        }

         //вариант через collect

        // $roles = collect(config('roles'));
        // if (!empty($roles)) {
        //     $roles->each(function ($item) {
        //         dd($item);
        //     });
        // }
    }
}
