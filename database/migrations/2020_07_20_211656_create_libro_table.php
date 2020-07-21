<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 100);
            $table->string('isbn', 30);
            $table->string('autor', 100);
            $table->unsignedTinyInteger('cantidad');//en base de datos en es un tiny(2)
            //obs: si a un unsigned se le asigna nullable se vuelve autoincrementa???  da error porque solo la llave primaria puede ser autoincremental.
            $table->string('editorial', 50)->nullable();
            $table->string('foto', 100)->nullable();
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
        Schema::dropIfExists('libro');
    }
}
