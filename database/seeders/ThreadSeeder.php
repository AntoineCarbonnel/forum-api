<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new Carbon();

        $title = Str::random(10);
        DB::table('threads')->insert([
            'title' => $title,
            'slug' => Str::of($title)->slug(),
            'body' => Str::random(100),
            'user_id' => rand(0, 10),
            'channel_id' => rand(0, 10),
            'created_at' => $date::now(),
            'updated_at' => $date::now(),
        ]);
    }
}
