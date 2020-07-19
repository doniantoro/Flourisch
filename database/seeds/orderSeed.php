<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class orderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');
 $o=1;
    	for($i = 1; $i <= 8; $i++){
            for($j = 1; $j <= 6; $j++){

        DB::table('order')->insert([
            'id_event' => $j,
            'nama'=>$faker->name,  
            'code_booking'=>'Flou'.$o,
        ]);
        $o++;

        }
    }
    DB::table('order')->insert([
        'id_event' => '1',
        'nama'=>'Doni Antoro',  
        'code_booking'=>'Flou49',
    ]);

        DB::table('order')->insert([
            'id_event' => '1',
            'nama'=>'Ningsih Adityas',  
            'code_booking'=>'Flou50',
        ]);
        DB::table('order')->insert([
            'id_event' => '1',
            'nama'=>'Khansa noviyanti',  
            'code_booking'=>'Flou51',
        ]);

        DB::table('order')->insert([
            'id_event' => '2',
            'nama'=>'Ilyas hidayat',  
            'code_booking'=>'Flou52',
        ]);
        DB::table('order')->insert([
            'id_event' => '2',
            'nama'=>'Muhamad Jumadi',  
            'code_booking'=>'Flou53',
        ]);
        DB::table('order')->insert([
            'id_event' => '1',
            'nama'=>'Khansa noviyanti',  
            'code_booking'=>'Flou54',
        ]);
        
    }
}
