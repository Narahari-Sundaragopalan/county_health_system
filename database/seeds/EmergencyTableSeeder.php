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
        Emergency::create([  'emergency_name' => 'Fire/Large Explosion', 'emergency_description' => 'City National Bank Building 407 S 16th St','emergency_start_date' => date('2017-03-12'), 'emergency_end_date' => date('2017-04-06'),
            'created_at' => date_create(), 'updated_at' => date_create()]);

        Emergency::create([  'emergency_name' => 'Tornado', 'emergency_description' => 'City of Omaha, 1819 Farnam St', 'emergency_start_date' => date('2017-03-10'), 'emergency_end_date' => date('2017-04-03'),
            'created_at' => date_create(), 'updated_at' => date_create()]);

        Emergency::create([  'emergency_name' => 'Building Collapse', 'emergency_description' => 'Turner Park, Omaha, 3253 Dodge Street', 'emergency_start_date' => date('2017-02-25'), 'emergency_end_date' => date('2017-05-10'),
            'created_at' => date_create(), 'updated_at' => date_create()]);

        Emergency::create([  'emergency_name' => 'Flash Flood', 'emergency_description' => 'Aksarben village, 2102 S 67th St, Omaha', 'emergency_start_date' => date('2017-03-05'), 'emergency_end_date' => date('2017-06-06'),
            'created_at' => date_create(), 'updated_at' => date_create()]);


    }
}
