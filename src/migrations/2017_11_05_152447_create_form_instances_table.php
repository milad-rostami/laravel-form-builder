<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormInstancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_instances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('form_id')->unsigned()->index()->nullable();
            $table->foreign('form_id')->references('id')->on('forms')->onDelete('cascade')->onUpdate('cascade');
            $table->json('dataset')->nullable();
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
        Schema::dropIfExists('form_instances');
    }
}
