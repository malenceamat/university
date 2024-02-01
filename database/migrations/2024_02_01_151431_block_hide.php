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
            $table->string('possibilities_hide')->nullable();
            $table->string('statistics_hide')->nullable();
            $table->string('audience_hide')->nullable();
            $table->string('cards_hide')->nullable();
            $table->string('stages_hide')->nullable();
            $table->string('selection_hide')->nullable();
            $table->string('additional_hide')->nullable();
            $table->string('team_hide')->nullable();
            $table->string('result_hide')->nullable();
            $table->string('partners_hide')->nullable();
            $table->string('contact_hide')->nullable();
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
