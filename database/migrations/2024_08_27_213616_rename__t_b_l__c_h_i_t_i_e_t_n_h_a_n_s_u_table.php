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
        Schema::rename('TBL_CHITIETNHANSU', 'tbl_staff_detail');

        Schema::table('tbl_staff_detail', function (Blueprint $table) {
            $table->renameColumn('MACHITIETNHANSU', 'id');
            $table->renameColumn('MAUSERNHANSU', 'user_staff_id');
            $table->renameColumn('MAKB_USERNHANSU', 'staff_kb_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_CHITIETNHANSU', function (Blueprint $table) {
            //
        });
    }
};
