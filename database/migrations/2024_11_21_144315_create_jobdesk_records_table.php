<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobdeskRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('jobdesk_records', function (Blueprint $table) {
            $table->id();
            $table->string('jobdesk');
            $table->string('nama');
            $table->string('hari');
            $table->integer('perolehan');
            $table->integer('target');
            $table->decimal('average', 5, 2)->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobdesk_records');
    }
}
