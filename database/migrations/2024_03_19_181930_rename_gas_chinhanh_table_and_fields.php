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
        Schema::rename('Tbl_GASChinhanh', 'tbl_gas_branch');

        Schema::table('tbl_gas_branch', function (Blueprint $table) {
            $table->renameColumn('ChinhanhGASID', 'id');
            $table->renameColumn('tenchinhan', 'branch_name');
            $table->renameColumn('MACONGTY', 'company_id');
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
