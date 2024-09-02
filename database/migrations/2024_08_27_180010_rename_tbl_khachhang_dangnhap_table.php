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
        Schema::rename('TBL_KHACHHANG_DANGNHAP', 'tbl_login_customer');

        Schema::table('tbl_login_customer', function (Blueprint $table) {
            $table->renameColumn('Madangkhachhang', 'id');
            $table->renameColumn('makhachhang', 'customer_id');
            $table->renameColumn('active', 'active');
            $table->renameColumn('datelog', 'date_log');
            $table->renameColumn('localIP', 'local_ip');
            $table->renameColumn('Computername', 'computer_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_KHACHHANG_DANGNHAP', function (Blueprint $table) {
            //
        });
    }
};
