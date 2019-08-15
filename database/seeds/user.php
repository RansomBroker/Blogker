<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
          'role' => 1,
          'image_profile' => '1563139289_kingcrimson-400x324.png',
          'name' => 'admin',
          'username' => 'admin',
          'email' => 'adminblogkeradmin@mail.com',
          'password' => bcrypt('12345678'),
          'description' => 'lorem ipsum',
        ]);
    }
}
