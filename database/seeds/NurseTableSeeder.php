<?php

use Illuminate\Database\Seeder;
use App\Nurse;

class NurseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nurses')->delete();
        Nurse::create( ['hospital_id' => 1, 'user_id' => 3,  'name' => 'Shivani', 'age' => 40, 'gender' => 'Female',
        'date_of_birth' => date('1977-03-09'), 'department' => 'Burn Ward', 'created_at' => date_create(), 'updated_at' => date_create() ]);

        Nurse::create( ['hospital_id' => 2, 'user_id' => 2, 'name' => 'Narahari', 'age' => 26, 'gender' => 'Male',
            'date_of_birth' => date('1990-03-09'), 'department' => 'General Care', 'created_at' => date_create(), 'updated_at' => date_create() ]);

    }
}
