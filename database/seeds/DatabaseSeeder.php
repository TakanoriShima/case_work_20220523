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
        // MessagesTableSeeder の呼び出し
        $this->call([LogsTableSeeder::class]);
    }
}
