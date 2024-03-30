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
        Schema::table('TBL_THONGTINTAIKHOANSUCKHOE', function (Blueprint $table) {
            $table->renameColumn('MATAIKHOANSUCKHOE', 'id');
            $table->renameColumn('MAKHACHHANG', 'customer_id');
            $table->renameColumn('MATINHTRANGGIADINH', 'family_status_id');
            $table->renameColumn('NHOMMAU', 'blood_group');
            $table->renameColumn('RHESUS', 'rhesus');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('logdate', 'log_date');
        });

        Schema::rename('TBL_THONGTINTAIKHOANSUCKHOE', 'tbl_health_account');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_THONGTINTAIKHOANSUCKHOE', function (Blueprint $table) {
            //
        });
    }
};
