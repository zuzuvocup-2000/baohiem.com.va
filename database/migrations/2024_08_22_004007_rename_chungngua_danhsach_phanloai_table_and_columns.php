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
        Schema::rename('TBL_CHUNGNGUA_DANHSACHPHANLOAICHUNGNGUA', 'tbl_horse_classification');

        Schema::table('tbl_horse_classification', function (Blueprint $table) {
            $table->renameColumn('MAPHANLOAICHUNGNGUA', 'id');
            $table->renameColumn('TENPHANLOAI', 'classification_name');
            $table->renameColumn('GHICHU', 'note');
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
        //
    }
};
