<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {        
            $table->Increments('carID')->unique();
            $table->string('carChassi',150)->unique();
            $table->string('carPlaca',150);
            $table->string('carDescricao',150);
            $table->string('carPathImagem',150);
            $table->integer('marcaID')->unsigned();
            $table->integer('corID')->unsigned();            
            $table->string('cardetalhe',150);
            $table->decimal('carValorAnuciado',9,2);
            $table->decimal('carValorVendido',9,2);
            $table->enum('carStatus',['0','1'])->default('1');            
            $table->foreign('corID')->references('corID')->on('cores')->onDelete('cascade');                                  
            $table->foreign('marcaID')->references('marcaID')->on('marcas')->onDelete('cascade');            
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('cars');
    }
}
