<?php
use App\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $curator =Role::create([
             'name' => 'Curator',
             'slug' => 'curator',
             'permissions' => [
                 'create-project' => true,
          //       'update-project' => true,
             ]
         ]);
         $student =Role::create([
             'name' => 'Student',
             'slug' => 'student',
             'permissions' => [

             ]
         ]);
         $admin =Role::create([
             'name' => 'Admin',
             'slug' => 'admin',
             'permissions' => [
               'create-project' => true,
               'update-project' => true,
               'destroy-project' => true,
               'show-projects' => true,
               'index-project' => true,
               'destroy-comment' => true,

             ]
         ]);
     }
 }
