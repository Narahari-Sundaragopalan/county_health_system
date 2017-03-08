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
            'security_question1' => 'Which is first country you visited', 'security_answer1' => 'sweden', 'security_question2' => 'What is the your house number', 'security_answer2' => '007','created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Narahari', 'password' => bcrypt('secret'), 'email' => 'nsundaragopalan@unomaha.edu',
            'security_question1' => 'What is the name of your first school', 'security_answer1' => 'mit', 'security_question2' => 'Where did you complete undergraduation', 'security_answer2' => 'rec','created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Shivani', 'password' => bcrypt('secret'), 'email' => 'ssinghparihar@unomaha.edu',
            'security_question1' => 'What is the name of your first pet', 'security_answer1' => 'roxy', 'security_question2' => 'What was your major in college', 'security_answer2' => 'electrical','created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Archana', 'password' => bcrypt('secret'), 'email' => 'araghu@unomaha.edu',
            'security_question1' => 'Which is your favourite band', 'security_answer1' => 'beatles', 'security_question2' => 'Which kind of music you prefer', 'security_answer2' => 'heavy metal','created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Pradeep', 'password' => bcrypt('secret'), 'email' => 'ppal@unomaha.edu',
            'security_question1' => 'Which is the first account you created email', 'security_answer1' => 'yahoo', 'security_question2' => 'Which is your hometown', 'security_answer2' => 'raipur','created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Vaibhav', 'password' => bcrypt('secret'), 'email' => 'vrahangdale@unomaha.edu',
            'security_question1' => 'Which is your favourite city', 'security_answer1' => 'kansas', 'security_question2' => 'What is your major', 'security_answer2' => 'mis','created_at' => date_create(), 'updated_at' => date_create()]);
    }
}
