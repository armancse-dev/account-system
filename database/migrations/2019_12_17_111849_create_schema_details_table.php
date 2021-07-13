<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchemaDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schema_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('schema_master_id')->unsigned();
            $table->foreign('schema_master_id')->references('id')->on('schema_masters');
            $table->integer('head_id')->unsigned();
            $table->foreign('head_id')->references('id')->on('heads');
            $table->integer('amount')->nullable();
            $table->string('type',10);
            $table->integer('number_of_payment')->nullable();
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
        Schema::dropIfExists('schema_details');
    }
}
