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
        Schema::create('room_books', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->date('check_in')->nullable();
            $table->date('check_out')->nullable();
            $table->tinyInteger('room_id')->nullable();
            $table->integer('room_quantity')->nullable();
            $table->integer('adult_quantity')->nullable();
            $table->integer('children_quantity')->nullable();
            $table->text('address')->nullable();
            $table->text('special_requirement')->nullable();
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
        Schema::dropIfExists('room_books');
    }
};
