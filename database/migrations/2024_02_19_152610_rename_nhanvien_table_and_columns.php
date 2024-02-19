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
        Schema::rename('TBL_NHANVIEN', 'tbl_employee');

        Schema::table('tbl_employee', function (Blueprint $table) {
            $table->renameColumn('employee_code', 'id');
            $table->renameColumn('MAPHONGBAN', 'department_id');
            $table->renameColumn('TENNHANVIEN', 'employee_name');
            $table->renameColumn('DIACHI', 'address');
            $table->renameColumn('DIENTHOAI', 'phone_number');
            $table->renameColumn('EMAIL', 'email');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('MAVITRICHUCVU', 'position_id');
        });

        Schema::rename('TBL_USER', 'tbl_user');
        Schema::table('tbl_user', function (Blueprint $table) {
            $table->renameColumn('MAUSER', 'id');
            $table->renameColumn('employee_code', 'employee_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('tbl_employee', 'TBL_NHANVIEN');

        Schema::table('TBL_NHANVIEN', function (Blueprint $table) {
            $table->renameColumn('id', 'employee_code');
            $table->renameColumn('department_id', 'MAPHONGBAN');
            $table->renameColumn('employee_name', 'TENNHANVIEN');
            $table->renameColumn('address', 'DIACHI');
            $table->renameColumn('phone_number', 'DIENTHOAI');
            $table->renameColumn('email', 'EMAIL');
            $table->renameColumn('active', 'ACTIVE');
            $table->renameColumn('position_id', 'MAVITRICHUCVU');
        });
        Schema::rename('tbl_user', 'TBL_USER');
        Schema::table('TBL_USER', function (Blueprint $table) {
            $table->renameColumn('id', 'MAUSER');
            $table->renameColumn('employee_id', 'employee_code');
        });
    }
};
