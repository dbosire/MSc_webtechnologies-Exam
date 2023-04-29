<?php
namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MyClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            ['name' => 'IT', 'class_type_id' => $ct[2]],
            ['name' => 'SCIT', 'class_type_id' => $ct[2]],
            ['name' => 'Electrical Engineering', 'class_type_id' => $ct[2]],
            ['name' => 'Commercial Law', 'class_type_id' => $ct[3]],


            ];

        DB::table('my_classes')->insert($data);

    }
}
