<?php

use Illuminate\Database\Seeder;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        $roles = array(
        	array(
        		'role_title' => 'Super Administrator',
        		'role_slug'  => 'super_admin',
        		'access_level' => 100,
        		'created_at'   => date("Y-m-d H:i:s"),
        		'updated_at'   => date("Y-m-d H:i:s"),
        	),
        	array(
        		'role_title' => 'Administrator',
        		'role_slug'  => 'admin',
        		'access_level' => 90,
        		'created_at'   => date("Y-m-d H:i:s"),
        		'updated_at'   => date("Y-m-d H:i:s"),
        	),
        	array(
        		'role_title' => 'Translator',
        		'role_slug'  => 'user',
        		'access_level' => 20,
        		'created_at'   => date("Y-m-d H:i:s"),
        		'updated_at'   => date("Y-m-d H:i:s"),
        	),
        	array(
        		'role_title' => 'Editor',
        		'role_slug'  => 'editor',
        		'access_level' => 20,
        		'created_at'   => date("Y-m-d H:i:s"),
        		'updated_at'   => date("Y-m-d H:i:s"),
        	),
        	array(
        		'role_title' => 'Applicant',
        		'role_slug'  => 'applicant',
        		'access_level' => 5,
        		'created_at'   => date("Y-m-d H:i:s"),
        		'updated_at'   => date("Y-m-d H:i:s"),
        	),


        );


        DB::table('roles')->insert($roles);


    }
}
