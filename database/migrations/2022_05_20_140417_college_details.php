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
        Schema::create('college_details', function (Blueprint $table) {
            $table->id();
            $table->string('college_name');
            $table->string('address');
            $table->string('seats_bca')->nullable();
            $table->string('seats_bba')->nullable();
            $table->string('seats_bbm')->nullable();
            $table->string('seats_bim')->nullable();
            $table->text('description');
            $table->string('images');
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
};
