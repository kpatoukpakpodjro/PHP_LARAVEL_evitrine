<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades;
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
        Schema::disableForeignKeyConstraints();
        Schema::create('article', function(Blueprint $table){
            //$table->engine = 'InnoDB';	
            $table->increments('idArt')->unsigned();
            $table->String('nomArt')->default('erreur');
            $table->longText('descriptionArt');
            $table->Integer('qtite')->default(1);
            $table->Integer('PU')->default(100);
            $table->Integer('prixLiv')->default(3);
            $table->String('delai')->default(3);
            
            $table->unsignedBigInteger('categorie_id')->default(1);
            $table->foreign('categorie_id')
            ->references('idCat')
            ->on('categorie')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->string('image')->default('rien');
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
        //
    }
};
