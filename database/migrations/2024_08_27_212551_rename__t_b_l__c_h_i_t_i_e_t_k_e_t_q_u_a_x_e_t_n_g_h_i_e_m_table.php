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
        Schema::rename('TBL_CHITIETKETQUAXETNGHIEM', 'tbl_test_results_detail');

        Schema::table('tbl_test_results_detail', function (Blueprint $table) {
            $table->renameColumn('CHITIETKETQUAXN', 'id');
            $table->renameColumn('MADOTKHAM', 'health_checkup_information_id');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('MACHITIETXETNGHIEM', 'test_detail_id');
            $table->renameColumn('MAUSER', 'user_id');
            $table->renameColumn('MATAIKHOANSUCKHOE', 'health_account_id');
            $table->renameColumn('KETQUA', 'results');
            $table->renameColumn('NGAYTHUCHIEN', 'date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_CHITIETKETQUAXETNGHIEM', function (Blueprint $table) {
            //
        });
    }
};
