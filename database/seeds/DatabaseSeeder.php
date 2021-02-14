<?php

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
        $this->call(UserSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(PollSeeder::class);
        $this->call(HomeworkSeeder::class);
        $this->call(GradeSeeder::class);
    }
}
