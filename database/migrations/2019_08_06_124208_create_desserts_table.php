<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDessertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desserts', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->nullable();
          $table->string('name')->nullable();
          $table->string('type')->nullable();
          $table->integer('price')->nullable();
          $table->string('image')->nullable();
          $table->timestamps();
          $table->charset = 'utf8';
          $table->collation = 'utf8_general_ci';
          $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desserts');
    }
}
