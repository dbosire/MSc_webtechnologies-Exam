<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'SCIT', 'code' => 'C'],
            ['name' => 'School of Law', 'code' => 'PN'],
            ['name' => 'SODel', 'code' => 'N'],
            ['name' => 'SEEIE', 'code' => 'P'],
            ['name' => 'School of Medicine', 'code' => 'J'],
            ['name' => 'SMS', 'code' => 'S'],
        ];

        DB::table('class_types')->insert($data);

    }
}
