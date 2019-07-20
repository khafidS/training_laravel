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
        //reset table
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();

        //Generate 3 Users
        DB::table('users')->insert([
          [
            'name' => "kapid",
            'email' => "kapid@gmail.com",
            'password' => bcrypt('amikom')
          ],
          [
            'name' => "akbar",
            'email' => "akbar@gmail.com",
            'password' => bcrypt('amikom')
          ],
          [
            'name' => "pororo",
            'email' => "pororo@gmail.com",
            'password' => bcrypt('amikom')
          ],
        ]);
    }
}
