<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePenulis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('address')->nullable();
            $table->string('social_fb')->nullable();
            $table->string('social_ig')->nullable();
            $table->string('social_twitter')->nullable();
            $table->boolean('status')->default(true);
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
        //
    }
}
