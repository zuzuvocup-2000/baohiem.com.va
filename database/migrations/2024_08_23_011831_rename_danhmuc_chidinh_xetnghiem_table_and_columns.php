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
        Schema::rename('TBL_DANHMUCCHIDINHXETNGHIEM', 'tbl_test_catalogue');

        // Rename the columns
        Schema::table('tbl_test_catalogue', function (Blueprint $table) {
            $table->renameColumn('MADANHMUCHIDINHXETNGHIEM', 'id');
            $table->renameColumn('TENXETNGHIEM', 'test_catalogue_name');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('MAPHANLOAIXN', 'test_classification_id');
            $table->renameColumn('MAPHONGKHAM', 'clinic_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_DANHMUCCHIDINHXETNGHIEM', function (Blueprint $table) {
            //
        });
    }
};
