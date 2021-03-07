<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = Str::random(10);
        DB::table('channels')->insert([
            'title' => $title,
            'slug' => Str::of($title)->slug(),
            'description' => Str::random(100)
        ]);
    }
}
