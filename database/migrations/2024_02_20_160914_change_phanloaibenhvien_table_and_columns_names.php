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
        Schema::rename('TBL_PHANLOAIBENHVIEN', 'tbl_hospital_type');

        Schema::table('tbl_hospital_type', function (Blueprint $table) {
            $table->renameColumn('MAPHANLOAIBENHVIEN', 'id');
            $table->renameColumn('TENPHANLOAIBENHVIEN', 'hospital_type_name');
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
        Schema::table('tbl_hospital_type', function (Blueprint $table) {
            $table->renameColumn('id', 'MAPHANLOAIBENHVIEN');
            $table->renameColumn('hospital_type_name', 'TENPHANLOAIBENHVIEN');
            $table->renameColumn('active', 'ACTIVE');
        });

        Schema::rename('tbl_hospital_type', 'TBL_PHANLOAIBENHVIEN');
    }
};
