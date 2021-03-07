<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class ReplieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('replie')->insert([
            'body' => Str::random(10),
            'user_id' => rand(0, 10),
            'thread_id' => rand(0, 10),
        ]);
    }
}
