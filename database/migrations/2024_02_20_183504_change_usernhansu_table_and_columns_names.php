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
        Schema::rename('tbl_usernhansu', 'tbl_user_staff');

        Schema::table('tbl_user_staff', function (Blueprint $table) {
            $table->renameColumn('mauser_nhansu', 'id');
            $table->renameColumn('username', 'username');
            $table->renameColumn('password', 'password');
            $table->renameColumn('makhachhang', 'customer_id');
            $table->renameColumn('active', 'active');
            $table->renameColumn('logdate', 'log_date');
            $table->renameColumn('FullAdmin', 'full_admin');
            $table->renameColumn('Gaspermission', 'gas_permission');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_user_staff', function (Blueprint $table) {
            $table->renameColumn('id', 'mauser_nhansu');
            $table->renameColumn('username', 'username');
            $table->renameColumn('password', 'password');
            $table->renameColumn('customer_id', 'makhachhang');
            $table->renameColumn('active', 'active');
            $table->renameColumn('log_date', 'logdate');
            $table->renameColumn('full_admin', 'FullAdmin');
            $table->renameColumn('gas_permission', 'Gaspermission');
        });

        Schema::rename('tbl_user_staff', 'tbl_usernhansu');
    }
};
