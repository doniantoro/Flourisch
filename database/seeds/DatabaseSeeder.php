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
        $this->call(userSeed::class);
        $this->call(orderSeed::class);
        $this->call(eventSeed::class);
    }
}
