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
        Schema::rename('TBL_KETQUAKHAM', 'tbl_health_reports');

        // Rename the columns
        Schema::table('tbl_health_reports', function (Blueprint $table) {
            $table->renameColumn('MAKETQUAKHAM', 'id');
            $table->renameColumn('MADOTKHAM', 'health_checkup_information_id');
            $table->renameColumn('KETQUA', 'examination_results');
            $table->renameColumn('KETLUAN', 'examination_conclusion');
            $table->renameColumn('BSKHAM', 'doctor_examines');
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
