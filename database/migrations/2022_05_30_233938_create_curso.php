<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->enum('area',
                ["Tecnologia da Informação",
                    "Tecnologia da moda",
                    "Automação Industrial",
                    "Metal Mecânica",
                    "Biotecnologia",
                    "Eletromecânica"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso');
    }
}
