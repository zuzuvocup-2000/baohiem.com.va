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
        Schema::rename('tbl_phucapBH', 'tbl_insurance_allowancebenefits');

        Schema::table('tbl_insurance_allowancebenefits', function (Blueprint $table) {
            $table->renameColumn('maphucapBH', 'id');
            $table->renameColumn('SotienUSD', 'amount_usd');
            $table->renameColumn('tigia', 'exchange_rate');
            $table->renameColumn('sotienVND', 'amount_vnd');
            $table->renameColumn('active', 'active');
            $table->renameColumn('manienhan', 'period_id');
            $table->renameColumn('Giatrimaxcuaquy', 'maximum_value_of_the_fund');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};
