<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReplieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new Carbon();

        DB::table('replies')->insert([
            'body' => Str::random(10),
            'user_id' => rand(0, 10),
            'created_at' => $date::now(),
            'updated_at' => $date::now(),
            'thread_id' => rand(0, 10),
        ]);
    }
}
