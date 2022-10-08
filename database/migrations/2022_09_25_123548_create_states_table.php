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

        if (Schema::hasTable('states')) {
            Schema::create('states', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->foreignId('countries_id')->constrained('countries')->onDelete('cascade');
                $table->timestamps();
            });
        }
         
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
};
