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
        Schema::rename('tbl_logdelete_chiBH', 'tbl_logdelete_insurance_expenses');

        Schema::table('tbl_logdelete_insurance_expenses', function (Blueprint $table) {
            $table->renameColumn('malogdelete', 'id');
            $table->renameColumn('machitietchitra', 'payment_detail_id');
            $table->renameColumn('user_benhvien', 'hospital_user');
            $table->renameColumn('mauser', 'user_id');
            $table->renameColumn('mauser_benhvien', 'hospital_user_id');
            $table->renameColumn('logdate', 'log_date');
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
        Schema::table('tbl_logdelete_chiBH', function (Blueprint $table) {
            //
        });
    }
};
