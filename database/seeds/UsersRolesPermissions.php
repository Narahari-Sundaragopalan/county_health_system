<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;

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

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->delete();
        Role::create([ 'name' => 'admin', 'display_name' => 'Administrator', 'description' => 'User is allowed to manage and edit other users',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Role::create([ 'name' => 'nurse', 'display_name' => 'Nurse', 'description' => 'User is able to update/add new patient details ...',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Role::create([ 'name' => 'coordinator', 'display_name' => 'Coordinator', 'description' => 'User is able to view patient details and Bed availability ...',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}

class PermissionTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissions')->delete();
        Permission::create([ 'name' => 'manage-users', 'display_name' => 'Manage Users', 'description' => 'User is allowed to add, edit and delete other users',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Permission::create([ 'name' => 'manage-roles', 'display_name' => 'Manage Roles', 'description' => 'User is allowed to add, edit and delete roles',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Permission::create([ 'name' => 'readonly-all', 'display_name' => 'Readonly', 'description' => 'User is allowed to read only access to ...',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}

class RoleUserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('role_user')->delete();

        $user = User::where('name', '=', 'Administrator')->first()->id;
        $role = Role::where('name', '=', 'admin')->first()->id;
        $role_user = [ ['role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create() ] ];
        DB::table('role_user')->insert($role_user);

        $user = User::where('name', '=', 'Shivani')->first()->id;
        $role = Role::where('name', '=', 'nurse')->first()->id;
        $role_user = [ ['role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create() ] ];
        DB::table('role_user')->insert($role_user);

        $user = User::where('name', '=', 'Narahari')->first()->id;
        $role = Role::where('name', '=', 'nurse')->first()->id;
        $role_user = [ ['role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create() ] ];
        DB::table('role_user')->insert($role_user);

        $user = User::where('name', '=', 'Archana')->first()->id;
        $role = Role::where('name', '=', 'coordinator')->first()->id;
        $role_user = [ 'role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()  ];
        DB::table('role_user')->insert($role_user);
    }
}

class UsersRolesPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manageUsers = Permission::where('name', '=', 'manage-users')->first();
        $manageRoles = Permission::where('name', '=', 'manage-roles')->first();
        $readonlyAll = Permission::where('name', '=', 'readonly-all')->first();

        $adminRole = Role::where('name', '=', 'admin')->first();
        $adminRole->attachPermissions(array($manageUsers, $manageRoles));

        $studentRole = Role::where('name', '=', 'coordinator')->first();
        $studentRole->attachPermissions(array($readonlyAll));
    }
}
