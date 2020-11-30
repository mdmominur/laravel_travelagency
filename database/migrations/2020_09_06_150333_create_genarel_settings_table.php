<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenarelSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genarel_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title');
            $table->string('logo');
            $table->string('logo_slug');
            $table->string('title1');
            $table->string('title2');
            $table->text('description');
            $table->string('image');
            $table->string('slug');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
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
        Schema::dropIfExists('genarel_settings');
    }
}
