<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncherirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('encherirs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('PrixEncherissement');
            $table->unsignedBigInteger('iduser');
            $table->foreign('iduser')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('idArticle');
            $table->foreign('idArticle')
                ->references('id')
                ->on('articles')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encherirs');
    }
}
