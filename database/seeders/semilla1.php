<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class semilla1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tareas')->insert([
            'name' => 'Juan',
            'course' => 'Math',
            'grade' => '5to',
            'hobby' => 'Futbol',
            'phone_number' => '1234567890',
        ]);
    }
}
