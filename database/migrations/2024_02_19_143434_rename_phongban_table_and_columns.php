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
        Schema::rename('TBL_PHONGBAN', 'tbl_department');

        Schema::table('tbl_department', function (Blueprint $table) {
            $table->renameColumn('MAPHONGBAN', 'id');
            $table->renameColumn('TENPHONGBAN', 'department_name');
            $table->renameColumn('ACTIVE', 'active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('tbl_department', 'TBL_PHONGBAN');

        Schema::table('TBL_PHONGBAN', function (Blueprint $table) {
            $table->renameColumn('id', 'MAPHONGBAN');
            $table->renameColumn('department_name', 'TENPHONGBAN');
            $table->renameColumn('active', 'ACTIVE');
        });
    }
};
