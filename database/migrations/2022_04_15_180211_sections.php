<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sections', function(Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Name_Section');
            $table->integer('Status');
            $table->bigInteger('Grade_id')->unsigned();
            $table->bigInteger('Class_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Sections');
    }
}
