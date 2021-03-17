<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('comments')->truncate();

        $comments = [
            ['author' => 'Mihawk', 'content' => 'Comment content 1', 'post_id' => '1'],
            ['author' => 'Kuma', 'content' => 'Comment content 2', 'post_id' => '2'],
            ['author' => 'Marco', 'content' => 'Comment content 3', 'post_id' => '3'],
        ];

        DB::table('comments')->insert($comments);
        Schema::enableForeignKeyConstraints();
    }
}
