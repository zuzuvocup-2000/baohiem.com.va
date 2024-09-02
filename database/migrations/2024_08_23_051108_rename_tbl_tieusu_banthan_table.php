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
        Schema::rename('TBL_TIEUSU_BANTHAN', 'tbl_personal_biography');

        Schema::table('tbl_personal_biography', function (Blueprint $table) {
            $table->renameColumn('MATIEUSUBANTHAN', 'id');
            $table->renameColumn('TENBENH', 'disease');
            $table->renameColumn('PHATHIENNAM_BENH', 'detection_year');
            $table->renameColumn('BENHNGHENGHIEP', 'occupational_disease');
            $table->renameColumn('PHATHIENNAM_BENHNGHENGHIEP', 'year_of_disease');
            $table->renameColumn('active', 'active');
            $table->renameColumn('MADOTKHAM', 'health_checkup_information_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_TIEUSU_BANTHAN', function (Blueprint $table) {
            //
        });
    }
};
