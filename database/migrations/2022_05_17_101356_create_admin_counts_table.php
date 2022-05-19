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
        Schema::create('admin_counts', function (Blueprint $table) {
            $table->id();
            $table->text('Clients');
            $table->text('CountClients');
            $table->text('Projects');
            $table->text('CountProjects');
            $table->text('Support');
            $table->text('CountSupport');
            $table->text('Workes');
            $table->text('CountWorkes');
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
        Schema::dropIfExists('admin_counts');
    }
};
