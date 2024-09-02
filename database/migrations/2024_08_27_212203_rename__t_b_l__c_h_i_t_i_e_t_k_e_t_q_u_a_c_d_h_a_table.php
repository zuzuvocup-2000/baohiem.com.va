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
        Schema::rename('TBL_CHITIETKETQUACDHA', 'tbl_result_detail_cdha');

        Schema::table('tbl_result_detail_cdha', function (Blueprint $table) {
            $table->renameColumn('MACHITIETKETQUACDHA', 'id');
            $table->renameColumn('KETQUACDHA', 'result_cdha');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('MADANHMUCCDHA', 'category_cdha_id');
            $table->renameColumn('MADOTKHAM', 'health_checkup_information_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_CHITIETKETQUACDHA', function (Blueprint $table) {
            //
        });
    }
};
