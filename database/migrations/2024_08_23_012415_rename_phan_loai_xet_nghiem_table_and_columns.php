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
        Schema::rename('TBL_PHANLOAIXETNGHIEM', 'tbl_test_classification');

        // Rename the columns
        Schema::table('tbl_test_classification', function (Blueprint $table) {
            $table->renameColumn('MAPHANLOAIXN', 'id');
            $table->renameColumn('TENPHANLOAIXN', 'type_name');
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
        Schema::table('TBL_PHANLOAIXETNGHIEM', function (Blueprint $table) {
            //
        });
    }
};
