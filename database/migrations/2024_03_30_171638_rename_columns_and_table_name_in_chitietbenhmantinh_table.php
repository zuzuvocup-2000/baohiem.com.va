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
        Schema::table('TBL_CHITIETBENHMANTINH', function (Blueprint $table) {
            $table->renameColumn('machitietbenhmantinh', 'id');
            $table->renameColumn('mabenhmantinh', 'chronic_disease_id');
            $table->renameColumn('benhchinh', 'main_disease');
            $table->renameColumn('benhphu', 'secondary_disease');
            $table->renameColumn('mataikhoansuckhoe', 'health_account_id');
            $table->renameColumn('active', 'active');
            $table->renameColumn('tenbacsi', 'doctor_name');
            $table->renameColumn('tenbenhvien', 'hospital_name');
            $table->renameColumn('logdate', 'log_date');
        });
        Schema::rename('TBL_CHITIETBENHMANTINH', 'tbl_chronic_disease_detail');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_CHITIETBENHMANTINH', function (Blueprint $table) {
            //
        });
    }
};
