<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocalizationToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
				$table->string('name_uk')->nullable()->after('name');
				$table->string('description_uk')->nullable()->after('description');
				$table->string('shot_description_uk')->nullable()->after('shot_description');
				
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['name_uk', 'description_uk', 'shot_description_uk']);
        });
    }
}
