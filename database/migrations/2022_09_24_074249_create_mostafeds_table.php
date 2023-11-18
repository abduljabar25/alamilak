<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMostafedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mostafeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Beneficiary');
            $table->string('Mother');
            $table->string('obstetrics')->nullable();
            $table->string('repa')->nullable();
            $table->string('piece')->nullable();
            $table->string('boycott')->nullable();
            $table->string('space')->nullable();
            $table->string('Customization')->nullable();
            $table->string('Municipal')->nullable();
            $table->string('slide')->nullable();
            $table->string('address')->nullable();
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('mostafeds');
    }
}
