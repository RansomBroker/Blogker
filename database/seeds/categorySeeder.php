<?php

use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'categories_name' => 'Laragon',
        ]);

        DB::table('categories')->insert([
            'categories_name' => 'Microcontroller',
        ]);

        DB::table('categories')->insert([
            'categories_name' => 'Laravel',
        ]);

        DB::table('categories')->insert([
            'categories_name' => 'Django',
        ]);

        DB::table('categories')->insert([
            'categories_name' => 'OpenCV Python',
        ]);
    }
}
