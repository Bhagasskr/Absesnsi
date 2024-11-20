<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNikAndRenameGajiToUnitInKaryawansTable extends Migration
{
    public function up()
    {
        Schema::table('karyawans', function (Blueprint $table) {
            // Cek apakah kolom 'nik' sudah ada
            if (!Schema::hasColumn('karyawans', 'nik')) {
                $table->string('nik')->after('id')->unique();
            }

            // Rename kolom 'gaji' menjadi 'unit' jika ada
            if (Schema::hasColumn('karyawans', 'gaji')) {
                $table->renameColumn('gaji', 'unit');
            }
        });
    }

    public function down()
    {
        Schema::table('karyawans', function (Blueprint $table) {
            if (Schema::hasColumn('karyawans', 'unit')) {
                $table->renameColumn('unit', 'gaji');
            }
            $table->dropColumn('nik');
        });
    }
}
