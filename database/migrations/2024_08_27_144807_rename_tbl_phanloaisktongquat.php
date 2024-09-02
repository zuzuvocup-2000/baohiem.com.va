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
        Schema::rename('TBL_PHANLOAISKTONGQUAT', 'tbl_classify_general_health');

        Schema::table('tbl_classify_general_health', function (Blueprint $table) {
            $table->renameColumn('MAPHANLOAISKTONGQUAT', 'id');
            $table->renameColumn('TENPHANLOAI', 'classify_name');
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
        Schema::table('TBL_PHANLOAISKTONGQUAT', function (Blueprint $table) {
            //
        });
    }
};
