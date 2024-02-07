<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlockHide extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_hide', function (Blueprint $table) {
            $table->id();
            $table->string('banner_hide')->nullable();
            $table->string('partners_hide')->nullable();
            $table->string('about_us_hide')->nullable();
            $table->string('advantagesh')->nullable();
            $table->string('gives_hide')->nullable();
            $table->string('stages_hide')->nullable();
            $table->string('programs_hide')->nullable();
            $table->string('faqs_hide')->nullable();
            $table->string('contact_hide')->nullable();
            $table->string('teacher_hide')->nullable();
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
        Schema::dropIfExists('block_hide');
    }
}
