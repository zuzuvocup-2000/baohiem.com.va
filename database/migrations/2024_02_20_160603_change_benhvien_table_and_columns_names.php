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
        Schema::rename('TBL_BENHVIEN', 'tbl_hospital');

        Schema::table('tbl_hospital', function (Blueprint $table) {
            $table->renameColumn('MABENHVIEN', 'id');
            $table->renameColumn('MAPHANLOAIBENHVIEN', 'hospital_type_id');
            $table->renameColumn('TENBENHVIEN', 'hospital_name');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('DIACHI', 'address');
            $table->renameColumn('EMAIL', 'email');
            $table->renameColumn('PHONE', 'phone');
            $table->renameColumn('NGUOILENHE', 'contact_person');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_hospital', function (Blueprint $table) {
            $table->renameColumn('id', 'MABENHVIEN');
            $table->renameColumn('hospital_type_id', 'MAPHANLOAIBENHVIEN');
            $table->renameColumn('hospital_name', 'TENBENHVIEN');
            $table->renameColumn('active', 'ACTIVE');
            $table->renameColumn('address', 'DIACHI');
            $table->renameColumn('email', 'EMAIL');
            $table->renameColumn('phone', 'PHONE');
            $table->renameColumn('contact_person', 'NGUOILENHE');
        });

        Schema::rename('tbl_hospital', 'TBL_BENHVIEN');
    }
};
