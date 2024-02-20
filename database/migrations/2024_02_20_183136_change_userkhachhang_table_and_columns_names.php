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
        Schema::rename('TBL_USERKHACHHANG', 'tbl_user_customer');

        Schema::table('tbl_user_customer', function (Blueprint $table) {
            $table->renameColumn('mauserkhachhang', 'id');
            $table->renameColumn('active', 'active');
            $table->renameColumn('username', 'username');
            $table->renameColumn('password', 'password');
            $table->renameColumn('logdate', 'log_date');
            $table->renameColumn('MAKHACHHANG', 'customer_id');
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
        Schema::table('tbl_user_customer', function (Blueprint $table) {
            $table->renameColumn('id', 'mauserkhachhang');
            $table->renameColumn('active', 'active');
            $table->renameColumn('username', 'username');
            $table->renameColumn('password', 'password');
            $table->renameColumn('log_date', 'logdate');
            $table->renameColumn('customer_id', 'MAKHACHHANG');
            $table->renameColumn('gas_branch_id', 'ChinhanhGASID');
        });

        Schema::rename('tbl_user_customer', 'TBL_USERKHACHHANG');
    }
};
