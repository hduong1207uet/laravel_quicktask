<?php

use Illuminate\Database\Seeder;
use App\Models as Database;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();

        $posts = [
            ['title' => 'Csrf Protection trong Laravel', 'author' => 'DuongHV'],
            ['title' => 'Eloquent model trong Laravel', 'author' => 'BachNV'],
            ['title' => 'Migration trong Laravel', 'author' => 'ToanDV'],
        ];

        DB::table('posts')->insert($posts);
        Schema::enableForeignKeyConstraints();
    }
}
