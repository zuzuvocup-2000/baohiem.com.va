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
        Schema::rename('TBL_USER_BENHVIEN', 'tbl_user_hospital');

        Schema::table('tbl_user_hospital', function (Blueprint $table) {
            $table->renameColumn('MAUSER_BENHVIEN', 'id');
            $table->renameColumn('MABENHVIEN', 'hospital_id');
            $table->renameColumn('TENNHANVIEN', 'employee_name');
            $table->renameColumn('username', 'username');
            $table->renameColumn('password', 'password');
            $table->renameColumn('active', 'active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_user_hospital', function (Blueprint $table) {
            $table->renameColumn('id', 'MAUSER_BENHVIEN');
            $table->renameColumn('hospital_id', 'MABENHVIEN');
            $table->renameColumn('employee_name', 'TENNHANVIEN');
            $table->renameColumn('username', 'username');
            $table->renameColumn('password', 'password');
            $table->renameColumn('active', 'active');
        });

        Schema::rename('tbl_user_hospital', 'TBL_USER_BENHVIEN');
    }
};
