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
        Schema::rename('TBL_CHIDINHXETNGHIEM', 'tbl_test_order');

        // Rename the columns
        Schema::table('tbl_test_order', function (Blueprint $table) {
            $table->renameColumn('MACHIDINHXETNGHIEM', 'id');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('DATELOG', 'datelog');
            $table->renameColumn('MADOTKHAM', 'health_checkup_information_id');
            $table->renameColumn('MADANHMUCCCHIDINHXETNGHIEM', 'test_catalogue_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_CHIDINHXETNGHIEM', function (Blueprint $table) {
            //
        });
    }
};
