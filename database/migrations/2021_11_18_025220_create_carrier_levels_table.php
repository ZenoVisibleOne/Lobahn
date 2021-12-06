<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrierLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrier_levels', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('carrier_level')->nullable();
            $table->boolean('is_active')->default(1)->nullable();
            $table->boolean('is_default')->default(0)->nullable();                     
            $table->timestamps();
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
        Schema::dropIfExists('carrier_levels');
    }
}