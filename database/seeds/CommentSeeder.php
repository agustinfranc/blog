<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'post_id' => 1,
                'content' => Str::random(10),
            ],
            [
                'post_id' => 1,
                'content' => Str::random(10),
            ],
            [
                'post_id' => 2,
                'content' => Str::random(10),
            ]
        ]);
    }
}
