<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHapalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hapalan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hari');
            $table->string('halaman');
            $table->string('surat');
            $table->string('ayat');
            $table->string('jus');
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
        Schema::dropIfExists('hapalan');
    }
}
