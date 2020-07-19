<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_user')->nullable();
            $table->string('judul')->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('lokasi')->nullable();
            $table->date('jadwal')->nullable();
            $table->date('start_register')->nullable();
            $table->date('end_register')->nullable();
            $table->integer('kapasitas')->nullable();
            $table->integer('harga');

        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
