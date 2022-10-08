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

        if(!Schema::hasTable('employees')){
            Schema::create('employees', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->foreignId('cities_id')->constrained('cities')->onDelete('cascade');
                $table->foreignId('countries_id')->constrained('countries')->onDelete('cascade');
                $table->foreignId('departments_id')->constrained('departments')->onDelete('cascade');
                $table->foreignId('states_id')->constrained('states')->onDelete('cascade');
                $table->string('firstname');
                $table->string('middlename')->nullable();
                $table->string('lastename');
                $table->string('address');
                $table->char('zip_code');
                $table->date('birthdate')->nullable();
                $table->date('date_hird')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
