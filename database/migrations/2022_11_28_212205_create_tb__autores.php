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
        Schema::create('tb__autores', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('idAutor');
            $table->string('Nombre');
            $table->date('Fechanacimiento');
            $table->integer('Librospublicados');
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
        Schema::dropIfExists('tb__autores');
    }
};
