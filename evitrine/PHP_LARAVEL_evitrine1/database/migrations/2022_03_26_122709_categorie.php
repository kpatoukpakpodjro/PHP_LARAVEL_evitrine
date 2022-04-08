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
        //Schema::disableForeignKeyConstraints();
        Schema::create('categorie', function(Blueprint $table){
            $table->unsignedBigInteger('idCat',true)->unsigned();
            $table->string('nomCat')->unique();
            //slug : adaptation du nom pour le rendre compatible avec les urls
            $table->string('slug')->unique() ;
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
