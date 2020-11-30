<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouristExpersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourist_expers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('role');
            $table->string('description');
            $table->string('slug');
            $table->string('image');
            $table->string('mark')->nullable()->comment('on = marked');
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
        Schema::dropIfExists('tourist_expers');
    }
}
