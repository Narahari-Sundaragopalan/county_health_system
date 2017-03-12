<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(UsersRolesPermissions::class);
        $this->call(HospitalTableSeeder::class);
        $this->call(EmergencyTableSeeder::class);
        $this->call(PatientTableSeeder::class);
    }
}
