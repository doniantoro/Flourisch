<?php

use Illuminate\Database\Seeder;

class eventSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event')->insert([
            'judul' => 'Lorem ipsum',
            'id_user' => '1',
            'thumbnail' => 'assets/assets/img/thumbnail/thumbnail1.jpg',
            'deskripsi'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent purus magna, auctor et mattis dapibus, ultrices eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut non metus sed urna porta suscipit sed ut quam. Aenean gravida convallis odio, ut facilisis lacus eleifend convallis. Pellentesque sed est velit. Mauris diam turpis, fringilla ut rhoncus sed, volutpat nec velit. Etiam non viverra mauris. Praesent semper eget turpis quis suscipit. Integer ornare pellentesque orci ut ullamcorper',
            'lokasi' => 'jakarta convension center Hall A',    
            'jadwal'=>'2021-1-25',
            'harga' => '35000',
            'start_register'=>'2021-1-24',
            'end_register' => '2020-10-25',    
            'kapasitas'=>'1000',
        ]);


        DB::table('event')->insert([
            'judul' => 'Lorem ipsum',
            'id_user' => '1',
            'thumbnail' => 'assets/assets/img/thumbnail/thumbnail2.jpg',
            'deskripsi'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent purus magna, auctor et mattis dapibus, ultrices eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut non metus sed urna porta suscipit sed ut quam. Aenean gravida convallis odio, ut facilisis lacus eleifend convallis. Pellentesque sed est velit. Mauris diam turpis, fringilla ut rhoncus sed, volutpat nec velit. Etiam non viverra mauris. Praesent semper eget turpis quis suscipit. Integer ornare pellentesque orci ut ullamcorper',
            'lokasi' => 'Gedung kesenian jakarta',    
            'jadwal'=>'2021-2-20',
            'harga' => '0',
            'start_register'=>'2021-1-19',
            'end_register' => '2020-10-25',    
            'kapasitas'=>'1000',
        ]);

        DB::table('event')->insert([
            'judul' => 'Lorem ipsum',
            'id_user' => '1',
            'thumbnail' => 'assets/assets/img/thumbnail/thumbnail3.jpg',
            'deskripsi'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent purus magna, auctor et mattis dapibus, ultrices eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut non metus sed urna porta suscipit sed ut quam. Aenean gravida convallis odio, ut facilisis lacus eleifend convallis. Pellentesque sed est velit. Mauris diam turpis, fringilla ut rhoncus sed, volutpat nec velit. Etiam non viverra mauris. Praesent semper eget turpis quis suscipit. Integer ornare pellentesque orci ut ullamcorper',
            'lokasi' => 'Hotel Pullman',    
            'jadwal'=>'2021-3-10',
            'harga' => '50000',
            'start_register'=>'2021-3-8',
            'end_register' => '2021-1-10',    
            'kapasitas'=>'1000',
        ]);

        

        DB::table('event')->insert([
            'judul' => 'Lorem ipsum',
            'id_user' => '2',
            'thumbnail' => 'assets/assets/img/thumbnail/thumbnail4.jpg',
            'deskripsi'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent purus magna, auctor et mattis dapibus, ultrices eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut non metus sed urna porta suscipit sed ut quam. Aenean gravida convallis odio, ut facilisis lacus eleifend convallis. Pellentesque sed est velit. Mauris diam turpis, fringilla ut rhoncus sed, volutpat nec velit. Etiam non viverra mauris. Praesent semper eget turpis quis suscipit. Integer ornare pellentesque orci ut ullamcorper',
            'lokasi' => 'Aula kemala,Esa unggul',    
            'jadwal'=>'2021-1-10',
            'harga' => '0',
            'start_register'=>'2021-1-9',
            'end_register' => '2020-10-25',    
            'kapasitas'=>'1000',
        ]);


        DB::table('event')->insert([
            'judul' => 'Lorem ipsum',
            'id_user' => '2',
            'thumbnail' => 'assets/assets/img/thumbnail/thumbnail2.jpg',
            'deskripsi'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent purus magna, auctor et mattis dapibus, ultrices eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut non metus sed urna porta suscipit sed ut quam. Aenean gravida convallis odio, ut facilisis lacus eleifend convallis. Pellentesque sed est velit. Mauris diam turpis, fringilla ut rhoncus sed, volutpat nec velit. Etiam non viverra mauris. Praesent semper eget turpis quis suscipit. Integer ornare pellentesque orci ut ullamcorper',
            'lokasi' => 'Hotel Astra',    
            'jadwal'=>'2021-4-1',
            'harga' => '50000',
            'start_register'=>'2021-3-28',
            'end_register' => '2021-1-10',    
            'kapasitas'=>'1000',
        ]);

        DB::table('event')->insert([
            'judul' => 'Lorem ipsum',
            'id_user' => '2',
            'thumbnail' => 'assets/assets/img/thumbnail/thumbnail2.jpg',
            'deskripsi'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent purus magna, auctor et mattis dapibus, ultrices eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut non metus sed urna porta suscipit sed ut quam. Aenean gravida convallis odio, ut facilisis lacus eleifend convallis. Pellentesque sed est velit. Mauris diam turpis, fringilla ut rhoncus sed, volutpat nec velit. Etiam non viverra mauris. Praesent semper eget turpis quis suscipit. Integer ornare pellentesque orci ut ullamcorper',
            'lokasi' => 'Gedung kesenian jakarta',    
            'jadwal'=>'2021-2-20',
            'harga' => '0',
            'start_register'=>'2021-1-19',
            'end_register' => '2020-10-25',    
            'kapasitas'=>'1000',
        ]);


    }
}
