<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePraticiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('praticiens', function (Blueprint $table) {
            $table->smallinteger('PRA_NUM')->primary();
            $table->string('PRA_NOM')->length(25);
            $table->string('PRA_PRENOM')->length(30);
            $table->string('PRA_ADRESSE')->length(50);
            $table->string('PRA_CP')->length(5);
            $table->string('PRA_VILLE')->length(25);
            $table->float('PRA_COEFNOTORIETE');
            $table->string('TYP_CODE')->length(3);

            $table->foreign('TYP_CODE')->references('TYP_CODE')->on('type_praticien');

            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('praticiens');
    }
}
