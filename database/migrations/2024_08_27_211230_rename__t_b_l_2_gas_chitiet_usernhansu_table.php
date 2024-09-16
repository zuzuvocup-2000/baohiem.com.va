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
        Schema::rename('TBL_2GasChitietUsernhansu', 'tbl_gas_user_staff_detail');

        Schema::table('tbl_gas_user_staff_detail', function (Blueprint $table) {
            $table->renameColumn('ChitietUserNhansuID', 'id');
            $table->renameColumn('mauser_nhansu', 'user_staff_id');
            $table->renameColumn('Active', 'active');
            $table->renameColumn('ChinhanhGASID', 'gas_branch_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_2GasChitietUsernhansu', function (Blueprint $table) {
            //
        });
    }
};
