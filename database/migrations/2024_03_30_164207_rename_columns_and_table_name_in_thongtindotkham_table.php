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
        Schema::table('TBL_THONGTIN_DOTKHAM', function (Blueprint $table) {
            $table->renameColumn('MADOTKHAM', 'id');
            $table->renameColumn('MATAIKHOANSUCKHOE', 'health_account_id');
            $table->renameColumn('MABENHVIEN', 'hospital_id');
            $table->renameColumn('BENHVIENKHAM', 'hospital_checkup');
            $table->renameColumn('NGAYKHAM', 'checkup_date');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('BACSIKETLUAN', 'doctor_conclusion');
            $table->renameColumn('CHIEUCAO', 'height');
            $table->renameColumn('VONGNGUC', 'chest_circumference');
            $table->renameColumn('MACH', 'pulse');
            $table->renameColumn('NHIETDO', 'temperature');
            $table->renameColumn('CANNANG', 'weight');
            $table->renameColumn('CHISOBMI', 'bmi');
            $table->renameColumn('HUYETAP', 'blood_pressure');
            $table->renameColumn('NHIPTHO', 'respiration_rate');
            $table->renameColumn('MACBENH', 'disease_code');
            $table->renameColumn('TENBENH', 'disease_name');
            $table->renameColumn('LOAISUCKHOE', 'health_type');
            $table->renameColumn('NGANHNGHE', 'occupation');
            $table->renameColumn('HUONGGIAIQUYET', 'solution_direction');
            $table->renameColumn('logdate', 'log_date');
        });

        Schema::rename('TBL_THONGTIN_DOTKHAM', 'tbl_health_checkup_information');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};
