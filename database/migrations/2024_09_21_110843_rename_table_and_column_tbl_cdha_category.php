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
        Schema::rename('tbl_cdha_category', 'tbl_diag_imaging_catalog');
        Schema::table('tbl_diag_imaging_catalog', function (Blueprint $table) {
            $table->renameColumn('cdha_name', 'diag_imaging_name');
            $table->renameColumn('classify_cdha_id', 'diag_imaging_class_id');
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
