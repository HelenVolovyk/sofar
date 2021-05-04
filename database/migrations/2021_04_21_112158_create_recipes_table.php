<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('recipes', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('title');
			$table->string('title_uk');
			$table->string('webname')->nullable();
			$table->text('thumbnail');
			$table->text('description');
			$table->text('description_uk');
			$table->string('shot_description');
			$table->string('shot_description_uk');
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
        Schema::dropIfExists('recipes');
    }
}