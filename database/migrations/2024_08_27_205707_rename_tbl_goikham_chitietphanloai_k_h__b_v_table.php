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
        Schema::rename('tbl_$goikham_chitietphanloaiKH_BV', 'tbl_examination_package_typecustome_detail');

        Schema::table('tbl_examination_package_typecustome_detail', function (Blueprint $table) {
            $table->renameColumn('machitietgoikham_phanloai', 'id');
            $table->renameColumn('maphanloaiKH_BV', 'customer_type_id');
            $table->renameColumn('magoikham', 'examination_package_id');
            $table->renameColumn('active', 'active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_$goikham_chitietphanloaiKH_BV', function (Blueprint $table) {
            //
        });
    }
};
