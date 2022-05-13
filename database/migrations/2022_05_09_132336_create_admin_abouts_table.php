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
        Schema::create('admin_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->text('title');
            $table->text('slogan');
            $table->text('point1');
            $table->text('point2');
            $table->text('point3');
            $table->text('point4');
            $table->text('description');
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
        Schema::dropIfExists('admin_abouts');
    }
};
