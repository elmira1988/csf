<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('center', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('name');
            $table->string('legal_address');
            $table->date('date_of_creation');
            $table->text('founder');
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
        Schema::dropIfExists('center');
    }
}
