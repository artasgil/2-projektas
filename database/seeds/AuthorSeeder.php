<?php

use Illuminate\Database\Seeder;

use App\authors;

// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('authors')->insert([
        //     'name' => Str::random(12),
        //     'surname' => Str::random(15),
        //     'username' => Str::random(17),

        // ]); Neveikia

        factory(authors::class,10)->create();

    }
}
