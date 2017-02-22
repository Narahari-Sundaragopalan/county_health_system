<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        User::create([  'name' => 'Administrator', 'password' => bcrypt('secret'), 'email' => 'hbtsadmin@unomaha.edu',
            'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Narahari', 'password' => bcrypt('secret'), 'email' => 'nsundaragopalan@unomaha.edu',
            'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Shivani', 'password' => bcrypt('secret'), 'email' => 'ssinghparihar@unomaha.edu',
            'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Archana', 'password' => bcrypt('secret'), 'email' => 'araghu@unomaha.edu',
            'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Pradeep', 'password' => bcrypt('secret'), 'email' => 'ppal@unomaha.edu',
            'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Vaibhav', 'password' => bcrypt('secret'), 'email' => 'vrahangdale@unomaha.edu',
            'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}
