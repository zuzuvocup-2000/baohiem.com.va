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
        Schema::rename('TBL_DANHSACHBACSI', 'tbl_doctor_list');

        Schema::table('tbl_doctor_list', function (Blueprint $table) {
            $table->renameColumn('MABACSI', 'id');
            $table->renameColumn('MABENHVIEN', 'hospital_id');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('TENBACSI', 'doctor_name');
            $table->renameColumn('DIACHI', 'address');
            $table->renameColumn('EMAIL', 'email');
            $table->renameColumn('PHONE', 'phone_number');
            $table->renameColumn('HOCVI', 'degree');
            $table->renameColumn('HOCHAM', 'academic_rank');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_DANHSACHBACSI', function (Blueprint $table) {
            //
        });
    }
};
