<?php

use Illuminate\Database\Seeder;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name' => 'doni antoro',
                'email'=>'doniantoro34@gmail.com',
                'password' => bcrypt('doni123'),    
                'role'=>'admin',
            ]);
    }
}
