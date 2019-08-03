<?php

use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
          'post_title' => 'TUTORIAL Microcontroller',
          'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed orci a sem laoreet venenatis id eu felis. Morbi vel ornare orci. Donec in aliquam enim, et facilisis libero. Phasellus consectetur ut justo vitae pharetra. Nam convallis porttitor enim, ac elementum ante tincidunt a. Proin ut tincidunt elit. Morbi convallis sem tellus, in lobortis justo gravida a. Ut sit amet posuere eros. Praesent ex purus, consequat id libero sed, tempor iaculis est. Ut finibus tristique mauris a consectetur',
          'post_visibility' => 'public',
          'post_create' => NOW(),
          'post_author' => 5,
          'post_categories' => 3,
        ]);

        DB::table('posts')->insert([
          'post_title' => 'TUTORIAL Open Cv Python',
          'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed orci a sem laoreet venenatis id eu felis. Morbi vel ornare orci. Donec in aliquam enim, et facilisis libero. Phasellus consectetur ut justo vitae pharetra. Nam convallis porttitor enim, ac elementum ante tincidunt a. Proin ut tincidunt elit. Morbi convallis sem tellus, in lobortis justo gravida a. Ut sit amet posuere eros. Praesent ex purus, consequat id libero sed, tempor iaculis est. Ut finibus tristique mauris a consectetur',
          'post_visibility' => 'public',
          'post_create' => NOW(),
          'post_author' => 5,
          'post_categories' => 6,
        ]);
    }
}
