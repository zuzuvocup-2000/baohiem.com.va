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
        Schema::rename('TBL_CHITIETXETNGHIEM', 'tbl_test_detail');

        // Rename the columns
        Schema::table('tbl_test_detail', function (Blueprint $table) {
            $table->renameColumn('MACHITIETXETNGHIEM', 'id');
            $table->renameColumn('MADANHMUCHIDINHXETNGHIEM', 'test_catalogue_id');
            $table->renameColumn('TENCHITIETXETNGHIEM', 'test_detail_name');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('GIATRIMAX', 'max_value');
            $table->renameColumn('GIATRIMIN', 'min_value');
            $table->renameColumn('DONVITINH', 'unit');
            $table->renameColumn('Chisobinhthuong', 'normal_value');
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
        Schema::table('english_in_tbl_chitietxetnghiem', function (Blueprint $table) {
            //
        });
    }
};
