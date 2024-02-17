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
            $table->renameColumn('MANHANVIEN', 'employee_code');
        });

        Schema::table('TBL_NHANVIEN', function (Blueprint $table) {
            $table->renameColumn('MANHANVIEN', 'employee_code');
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
            $table->renameColumn('employee_code', 'MANHANVIEN');
        });

        Schema::table('TBL_NHANVIEN', function (Blueprint $table) {
            $table->renameColumn('employee_code', 'MANHANVIEN');
        });
    }
};
