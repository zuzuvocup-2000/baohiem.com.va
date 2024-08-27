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
        Schema::rename('TBL_PHANLOAICDHA', 'tbl_classify_cdha');

        Schema::table('tbl_classify_cdha', function (Blueprint $table) {
            $table->renameColumn('MAPHANLOAICDHA', 'id');
            $table->renameColumn('TENPHANLOAICDHA', 'name_cdha');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('maphongkham', 'clinic_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_PHANLOAICDHA', function (Blueprint $table) {
            //
        });
    }
};
