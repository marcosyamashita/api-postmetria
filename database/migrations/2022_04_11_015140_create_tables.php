<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("enderecos", function(Blueprint $table){
            $table->id();
            $table->string("cep");
            $table->string("logradouro");
            $table->string("numero");
            $table->string("bairro");
            $table->string("cidade");
            $table->string("estado");
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
        Schema::dropIfExists("enderecos");
    }
}
