<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim'=>'2031710012',
            'name' => 'Erina Seviyanti',
            'class' => 'MI2E',
            'department' => 'MI',
            'phone_number'  => '087739772017',
        ]);
        DB::table('students')->insert([
            'nim'=>'2031710017',
            'name' => 'Eva Monika S',
            'class' => 'MI2E',
            'department' => 'MI',
            'phone_number'  => '087621782918',
        ]);
        DB::table('students')->insert([
            'nim'=>'2031710074',
            'name' => 'Fariz Al Baihaqqi',
            'class' => 'MI2E',
            'department' => 'MI',
            'phone_number'  => '085627189201',
        ]);
    }
}
