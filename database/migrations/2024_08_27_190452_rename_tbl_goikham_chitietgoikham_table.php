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
        Schema::rename('tbl_goikham_chitietgoikham', 'tbl_examination_package_details');

        Schema::table('tbl_examination_package_details', function (Blueprint $table) {
            $table->renameColumn('MACHITIETGOIKHAM', 'id');
            $table->renameColumn('MADANHMUCHIDINHXETNGHIEM', 'list_of_test_id');
            $table->renameColumn('active', 'active');
            $table->renameColumn('maphanloaiKH_BV', 'customer_type_id');
            $table->renameColumn('madanhmucchuyenkhoa', 'specialty_list');
            $table->renameColumn('madanhmuccdha', 'list_cdha_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_goikham_chitietgoikham', function (Blueprint $table) {
            //
        });
    }
};
