<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb__libros', function (Blueprint $table) {
            $table->increments('idLibro');
            $table->integer('ISNB');
            $table->string('Titulo');
            $table->string('Autor');
            $table->integer('Paginas');
            $table->string('Editorial');
            $table->string('Email');
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
        Schema::dropIfExists('tb__libros');
    }
};
