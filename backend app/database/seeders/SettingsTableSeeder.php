<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['type' => 'current_session', 'description' => '2018-2019'],
            ['type' => 'system_title', 'description' => 'SCIT'],
            ['type' => 'system_name', 'description' => 'SCIT'],
            ['type' => 'term_ends', 'description' => '7/10/2022'],
            ['type' => 'term_begins', 'description' => '7/10/2022'],
            ['type' => 'phone', 'description' => '0716880932'],
            ['type' => 'address', 'description' => 'Jomo Kenyatta University of Science and Technology, Juja'],
            ['type' => 'system_email', 'description' => 'dnbosires@gmail.com'],
            ['type' => 'alt_email', 'description' => ''],
            ['type' => 'email_host', 'description' => ''],
            ['type' => 'email_pass', 'description' => ''],
            ['type' => 'lock_exam', 'description' => 0],
            ['type' => 'logo', 'description' => ''],
            ['type' => 'next_term_fees_j', 'description' => '20000'],
            ['type' => 'next_term_fees_pn', 'description' => '25000'],
            ['type' => 'next_term_fees_p', 'description' => '25000'],
            ['type' => 'next_term_fees_n', 'description' => '25600'],
            ['type' => 'next_term_fees_s', 'description' => '15600'],
            ['type' => 'next_term_fees_c', 'description' => '16000'],
        ];

        DB::table('settings')->insert($data);

    }
}
