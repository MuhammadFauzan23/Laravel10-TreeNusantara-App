<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Iklan extends Migration
{

    public function up()
    {
        Schema::create('tbl_iklan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_iklan');
            $table->text('link');
            $table->text('gambar_iklan');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('tbl_iklan');
    }
}
