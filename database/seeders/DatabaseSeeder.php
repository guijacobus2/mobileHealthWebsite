<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create(['email'=> 'a@a.com']);
        \App\Models\Course::factory(4)->create();
        \App\Models\Coursedate::factory(20)->create();
        \App\Models\Booking::factory(5)->create();

    }
}
