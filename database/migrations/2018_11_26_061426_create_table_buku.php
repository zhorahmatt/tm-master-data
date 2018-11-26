<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->integer('writers_id')->unsigned()->nullable();
            $table->integer('publishers_id')->unsigned()->nullable();
            $table->integer('categories_id')->unsigned()->nullable();
            $table->string('amount_book')->nullable();
            $table->text('description');
            $table->boolean('status')->default(true);
            $table->timestamps();
            
            //add foreign
            $table->foreign('writers')->references('id')->on('master_penulis')->onDelete('cascade');
            $table->foreign('publishers')->references('id')->on('master_penerbit')->onDelete('cascade');
            $table->foreign('categories')->references('id')->on('master_kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
