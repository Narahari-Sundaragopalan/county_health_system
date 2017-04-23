<?php

use Illuminate\Database\Seeder;
use App\Report;

class ReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->delete();
        Report::create([  'month' => 'January', 'emergency_name' => 'Fire/Large Explosion', 'emergency_description' => 'City National Bank Building 407 S 16th St','emergency_start_date' => date('2017-03-12'), 'emergency_end_date' => date('2017-04-06'),
            'hospital_name' => 'UNMC', 'bed_count' => 100, 'beds_available' => 38, 'created_at' => date_create(), 'updated_at' => date_create()]);

        Report::create([  'month' => 'January', 'emergency_name' => 'Tornado', 'emergency_description' => 'City of Omaha, 1819 Farnam St', 'emergency_start_date' => date('2017-03-10'), 'emergency_end_date' => date('2017-04-03'),
            'hospital_name' => 'Methodist', 'bed_count' => 65, 'beds_available' => 30, 'created_at' => date_create(), 'updated_at' => date_create()]);

        Report::create([  'month' => 'February', 'emergency_name' => 'Building Collapse', 'emergency_description' => 'Turner Park, Omaha, 3253 Dodge Street', 'emergency_start_date' => date('2017-02-25'), 'emergency_end_date' => date('2017-05-10'),
            'hospital_name' => 'Methodist', 'bed_count' => 150, 'beds_available' => 35, 'created_at' => date_create(), 'updated_at' => date_create()]);

        Report::create([  'month' => 'March', 'emergency_name' => 'Flash Flood', 'emergency_description' => 'Aksarben village, 2102 S 67th St, Omaha', 'emergency_start_date' => date('2017-03-05'), 'emergency_end_date' => date('2017-06-06'),
            'hospital_name' => 'UNMC', 'bed_count' => 80, 'beds_available' => 40, 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}
