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
        Schema::rename('tbl_classify_cdha', 'tbl_diag_imaging_class');

        Schema::table('tbl_diag_imaging_class', function (Blueprint $table) {
            $table->renameColumn('TENPHANLOAICDHA', 'diag_imaging_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
