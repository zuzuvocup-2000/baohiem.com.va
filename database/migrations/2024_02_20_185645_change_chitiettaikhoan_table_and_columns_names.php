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
        Schema::rename('TBL_CHITIETTAIKHOAN', 'tbl_account_detail');

        Schema::table('tbl_account_detail', function (Blueprint $table) {
            $table->renameColumn('MACHITIETTAIKHOAN', 'mid');
            $table->renameColumn('MATAIKHOAN', 'account_id');
            $table->renameColumn('MAUSER', 'user_id');
            $table->renameColumn('MAKHACHHANG', 'customer_id');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('LOGDATE', 'log_date');
            $table->renameColumn('DUKYTRUOC', 'advance_payment');
            $table->renameColumn('chutaikhoan', 'account_holder');
            $table->renameColumn('ngaythamgiadautien', 'first_visit_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_account_detail', function (Blueprint $table) {
            $table->renameColumn('id', 'MACHITIETTAIKHOAN');
            $table->renameColumn('account_id', 'MATAIKHOAN');
            $table->renameColumn('user_id', 'MAUSER');
            $table->renameColumn('customer_id', 'MAKHACHHANG');
            $table->renameColumn('active', 'ACTIVE');
            $table->renameColumn('log_date', 'LOGDATE');
            $table->renameColumn('advance_payment', 'DUKYTRUOC');
            $table->renameColumn('account_holder', 'chutaikhoan');
            $table->renameColumn('first_visit_date', 'ngaythamgiadautien');
        });

        Schema::rename('tbl_account_detail', 'TBL_CHITIETTAIKHOAN');
    }
};
