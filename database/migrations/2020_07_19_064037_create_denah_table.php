<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDenahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denah', function (Blueprint $table) {
            $table->bigIncrements('denah_id');
            $table->unsignedBigInteger('tipe_id');
            $table->string('file',10000);
            $table->timestamps();
            
            $table->foreign('tipe_id')->references('tipe_id')->on('tipe')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denah');
    }
}
