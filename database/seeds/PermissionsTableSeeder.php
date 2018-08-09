<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2018-08-07 03:31:12',
                'updated_at' => '2018-08-07 03:31:12',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2018-08-07 03:31:13',
                'updated_at' => '2018-08-07 03:31:13',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2018-08-07 03:31:13',
                'updated_at' => '2018-08-07 03:31:13',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2018-08-07 03:31:13',
                'updated_at' => '2018-08-07 03:31:13',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2018-08-07 03:31:13',
                'updated_at' => '2018-08-07 03:31:13',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2018-08-07 03:31:13',
                'updated_at' => '2018-08-07 03:31:13',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2018-08-07 03:31:14',
                'updated_at' => '2018-08-07 03:31:14',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2018-08-07 03:31:14',
                'updated_at' => '2018-08-07 03:31:14',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2018-08-07 03:31:14',
                'updated_at' => '2018-08-07 03:31:14',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2018-08-07 03:31:14',
                'updated_at' => '2018-08-07 03:31:14',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2018-08-07 03:31:14',
                'updated_at' => '2018-08-07 03:31:14',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2018-08-07 03:31:14',
                'updated_at' => '2018-08-07 03:31:14',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2018-08-07 03:31:14',
                'updated_at' => '2018-08-07 03:31:14',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2018-08-07 03:31:14',
                'updated_at' => '2018-08-07 03:31:14',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2018-08-07 03:31:14',
                'updated_at' => '2018-08-07 03:31:14',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2018-08-07 03:31:14',
                'updated_at' => '2018-08-07 03:31:14',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2018-08-07 03:31:15',
                'updated_at' => '2018-08-07 03:31:15',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_registered',
                'table_name' => 'registered',
                'created_at' => '2018-08-08 17:44:59',
                'updated_at' => '2018-08-08 17:44:59',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_registered',
                'table_name' => 'registered',
                'created_at' => '2018-08-08 17:44:59',
                'updated_at' => '2018-08-08 17:44:59',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_registered',
                'table_name' => 'registered',
                'created_at' => '2018-08-08 17:44:59',
                'updated_at' => '2018-08-08 17:44:59',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_registered',
                'table_name' => 'registered',
                'created_at' => '2018-08-08 17:44:59',
                'updated_at' => '2018-08-08 17:44:59',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_registered',
                'table_name' => 'registered',
                'created_at' => '2018-08-08 17:44:59',
                'updated_at' => '2018-08-08 17:44:59',
            ),
        ));
        
        
    }
}