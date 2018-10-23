<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   


        public function run()
    {
        DB::table('books')->insert([
            'title' => 'Java',
            'description' => 'descJava',
            'category_id' => 1
        ]);
        DB::table('books')->insert([
            'title' => 'C++',
            'description' => 'descC++',
            'category_id' => 1
        ]);
        DB::table('books')->insert([
            'title' => 'C#',
            'description' => 'descC#',
            'category_id' => 1
        ]);
        DB::table('books')->insert([
            'title' => 'Beginning Angular with Typescript',
            'description' => 'desc Beginning Angular with Typescript',
            'category_id' => 2
        ]);
        DB::table('books')->insert([
            'title' => 'PHP and MySQL Web Devolopment',
            'description' => 'desc PHP and MySQL Web Devolopment',
            'category_id' => 2
        ]);
        DB::table('books')->insert([
            'title' => 'MySQL Tutorial',
            'description' => 'desc MySQL Tutorial',
            'category_id' => 3
        ]);

    }
    }

