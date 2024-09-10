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

        Schema::table('tbl_test_detail', function (Blueprint $table) {
            $table->renameColumn('MACHITIETXETNGHIEM', 'id');
            $table->renameColumn('MADANHMUCHIDINHXETNGHIEM', 'list_of_test_id');
            $table->renameColumn('TENCHITIETXETNGHIEM', 'test_detail_name');
            $table->renameColumn('GIATRIMAX', 'max');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('GIATRIMIN', 'min');
            $table->renameColumn('DONVITINH', 'unit');
            $table->renameColumn('Chisobinhthuong', 'normal_index');
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
        Schema::table('TBL_CHITIETXETNGHIEM', function (Blueprint $table) {
            //
        });
    }
};
