<?php

namespace Database\Seeders;

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
        $title = Str::random(10);
        DB::table('thread')->insert([
            'title' => $title,
            'slug' => Str::of($title)->slug(),
            'body' => Str::random(100),
            'user_id' => rand(0, 10)
        ]);
    }
}
