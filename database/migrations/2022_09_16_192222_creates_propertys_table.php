<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesPropertysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('propertys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tyeppro');
            $table->string('numpro');
            $table->string('name');
            $table->string('RenTerm');
            $table->string('amount');
            $table->date('begcontract');
            $table->date('endcontract');
            $table->string('notes');
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
        Schema::dropIfExists('propertys');
    }
}
