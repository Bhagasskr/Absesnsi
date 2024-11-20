<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('validations', function (Blueprint $table) {
        $table->id();
        $table->string('jobdesk');
        $table->string('nama');
        $table->integer('se')->nullable();
        $table->integer('s')->nullable();
        $table->integer('r')->nullable();
        $table->integer('k')->nullable();
        $table->integer('j')->nullable();
        $table->integer('target');
        $table->integer('Average')->nullable();
        $table->string('Keterangan');
        $table->timestamps();
    });
}

};
