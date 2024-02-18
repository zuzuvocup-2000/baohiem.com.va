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
        Schema::table('TBL_USER', function (Blueprint $table) {
            $table->renameColumn('TENDANGNHAP', 'username');
            $table->renameColumn('MATKHAU', 'password');
            $table->renameColumn('ACTIVE', 'active');
        });

        Schema::table('TBL_USER_BENHVIEN', function (Blueprint $table) {
            $table->renameColumn('TENDANGNHAP', 'username');
            $table->renameColumn('MATKHAU', 'password');
            $table->renameColumn('ACTIVE', 'active');
        });

        Schema::table('TBL_USERKHACHHANG', function (Blueprint $table) {
            $table->renameColumn('TENDANGNHAP', 'username');
            $table->renameColumn('MATKHAU', 'password');
        });

        Schema::table('tbl_usernhansu', function (Blueprint $table) {
            $table->renameColumn('TENDANGNHAP', 'username');
            $table->renameColumn('MATKHAU', 'password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_USER', function (Blueprint $table) {
            $table->renameColumn('username', 'TENDANGNHAP');
            $table->renameColumn('password', 'MATKHAU');
            $table->renameColumn('active', 'ACTIVE');
        });

        Schema::table('TBL_USER_BENHVIEN', function (Blueprint $table) {
            $table->renameColumn('username', 'TENDANGNHAP');
            $table->renameColumn('password', 'MATKHAU');
            $table->renameColumn('active', 'ACTIVE');
        });

        Schema::table('TBL_USERKHACHHANG', function (Blueprint $table) {
            $table->renameColumn('username', 'TENDANGNHAP');
            $table->renameColumn('password', 'MATKHAU');
        });

        Schema::table('tbl_usernhansu', function (Blueprint $table) {
            $table->renameColumn('username', 'TENDANGNHAP');
            $table->renameColumn('password', 'MATKHAU');
        });
    }
};
