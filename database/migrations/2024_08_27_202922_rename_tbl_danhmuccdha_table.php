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
        Schema::rename('TBL_DANHMUCCDHA', 'tbl_cdha_category');

        Schema::table('tbl_cdha_category', function (Blueprint $table) {
            $table->renameColumn('MADANHMUCCDHA', 'id');
            $table->renameColumn('TENCHIDINHCDHA', 'cdha_name');
            $table->renameColumn('MAPHANLOAICDHA', 'cdha_id');
            $table->renameColumn('maphongkham', 'clinic_id');
            $table->renameColumn('ACTIVE', 'active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_DANHMUCCDHA', function (Blueprint $table) {
            //
        });
    }
};
