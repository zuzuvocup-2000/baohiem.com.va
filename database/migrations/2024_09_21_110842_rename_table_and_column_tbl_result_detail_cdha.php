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
        Schema::rename('tbl_result_detail_cdha', 'tbl_diag_imaging_result_detail');

        Schema::table('tbl_diag_imaging_result_detail', function (Blueprint $table) {
            $table->renameColumn('result_cdha', 'diag_imaging_result');
            $table->renameColumn('cdha_category_id', 'diag_imaging_category_id');
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
