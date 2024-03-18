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
        Schema::rename('TBL_CHITIETNIENHAN', 'tbl_period_detail');

        Schema::table('tbl_period_detail', function (Blueprint $table) {
            $table->renameColumn('machitietnienhan', 'id');
            $table->renameColumn('manienhan', 'period_id');
            $table->renameColumn('macongty', 'company_id');
            $table->renameColumn('active', 'active');
            $table->renameColumn('datelog', 'datelog');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_period_detail', function (Blueprint $table) {
            $table->renameColumn('id', 'machitietnienhan');
            $table->renameColumn('period_id', 'manienhan');
            $table->renameColumn('company_id', 'macongty');
            $table->renameColumn('active', 'active');
            $table->renameColumn('datelog', 'datelog');
        });

        Schema::rename('tbl_period_detail', 'TBL_CHITIETNIENHAN');
    }
};
