<?php

use Illuminate\Database\Seeder;
use App\Hospital;

class HospitalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hospitals')->delete();
        Hospital::create([  'hospital_name' => 'UNMC', 'address_1' => 'South 42nd Street & Emelie St', 'address_2' => 'Omaha, NE',
            'contact' => '(402) 559-4000', 'zipcode' => '68198', 'critical_care_beds' => 300, 'critical_care_beds_occupied' => 170,
            'burn_ward_beds' => 225, 'burn_ward_beds_occupied' => 85, 'pediatric_unit_beds' => 125, 'pediatric_unit_beds_occupied' => 55,
            'general_care_beds' => 50, 'general_care_beds_occupied' => 15,'created_at' => date_create(), 'updated_at' => date_create()]);

        Hospital::create([  'hospital_name' => 'Methodist', 'address_1' => '8303 Dodge Street', 'address_2' => 'Omaha, NE',
            'contact' => '(402) 354-4000', 'zipcode' => '68114', 'critical_care_beds' => 550, 'critical_care_beds_occupied' => 210,
            'burn_ward_beds' => 325, 'burn_ward_beds_occupied' => 110, 'pediatric_unit_beds' => 175, 'pediatric_unit_beds_occupied' => 65,
            'general_care_beds' => 90, 'general_care_beds_occupied' => 25,'created_at' => date_create(), 'updated_at' => date_create()]);

    }
}
