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
        Schema::create('booking', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('token')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('package_id')->nullable();
            $table->text('location')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable()->default('Menunggu Konfirmasi');
            $table->integer('price_1')->nullable()->default(0);
            $table->integer('price_2')->nullable()->default(0);
            $table->integer('price_3')->nullable()->default(0);
            $table->integer('price_4')->nullable()->default(0);
            $table->integer('price_5')->nullable()->default(0);
            $table->integer('total')->nullable()->default(0);
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
        Schema::dropIfExists('booking');
    }
};
