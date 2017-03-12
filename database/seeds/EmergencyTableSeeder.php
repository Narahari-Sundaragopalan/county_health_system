<?php

use Illuminate\Database\Seeder;
use App\Emergency;

class EmergencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emergency')->delete();
        Emergency::create([  'emergency_name' => 'Fire/Large Explosion', 'emergency_start_date' => date('2017-03-12'), 'emergency_end_date' => date('2017-04-06'),
            'created_at' => date_create(), 'updated_at' => date_create()]);

        Emergency::create([  'emergency_name' => 'Tornado', 'emergency_start_date' => date('2017-03-10'), 'emergency_end_date' => date('2017-04-03'),
            'created_at' => date_create(), 'updated_at' => date_create()]);

        Emergency::create([  'emergency_name' => 'Building Collapse', 'emergency_start_date' => date('2017-02-25'), 'emergency_end_date' => date('2017-05-10'),
            'created_at' => date_create(), 'updated_at' => date_create()]);

        Emergency::create([  'emergency_name' => 'Flash Flood', 'emergency_start_date' => date('2017-03-05'), 'emergency_end_date' => date('2017-06-06'),
            'created_at' => date_create(), 'updated_at' => date_create()]);


    }
}
