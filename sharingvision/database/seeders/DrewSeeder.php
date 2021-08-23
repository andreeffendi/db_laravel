<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DrewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('db_sv')->insert([
            'title' => '',
            'content' => '',
            'category' => '',
            'created_date' => '',
            'updated_date' => '',
            'status' => '',
        ]);
    }
}
