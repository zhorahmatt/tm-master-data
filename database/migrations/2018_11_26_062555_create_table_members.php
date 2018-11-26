<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function(Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('registration_number')->unique();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('identity_number')->nullable();
            $table->string('social_instagram')->nullable();
            $table->string('social_twitter')->nullable();
            $table->string('social_facebook')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('is_premium')->default(false);
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
        Schema::dropIfExists('members');
    }
}
