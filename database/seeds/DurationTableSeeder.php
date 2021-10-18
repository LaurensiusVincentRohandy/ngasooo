<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('durations')->insert([
            ['duration' => '30'],
            ['duration' => '60']
        ]);
    }
}
