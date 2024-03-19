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
        Schema::rename('tbl_GasChitietChinhanh', 'tbl_gas_branch_detail');

        Schema::table('tbl_gas_branch_detail', function (Blueprint $table) {
            $table->renameColumn('Int64numeric', 'id');
            $table->renameColumn('MAKHACHHANG', 'customer_id');
            $table->renameColumn('ChinhanhGASID', 'gas_branch_id');
            $table->renameColumn('Active', 'active');
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
