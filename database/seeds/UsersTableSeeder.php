<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Create a default Admin user to own all seeded fundraisers.
      $admin_name = config('booster.admin_name');
      $admin_email = config('booster.admin_email');
      $admin_password = config('booster.admin_password');
      DB::table('users')->insert([
        ["name" => $admin_name, "email" => $admin_email, "password" => bcrypt($admin_password)],
        ["name" => 'Test Reviewer 1', "email" => 'test-reviewer1@heramb.net', "password" => bcrypt($admin_password)],
        ["name" => 'Test Reviewer 2', "email" => 'test-reviewer2@heramb.net', "password" => bcrypt($admin_password)],
        ["name" => 'Test Reviewer 3', "email" => 'test-reviewer3@heramb.net', "password" => bcrypt($admin_password)],
        ["name" => 'Test Reviewer 4', "email" => 'test-reviewer4@heramb.net', "password" => bcrypt($admin_password)],
      ]);

      echo "Admin user seeded with the following password: ".$admin_password;
    }
}
