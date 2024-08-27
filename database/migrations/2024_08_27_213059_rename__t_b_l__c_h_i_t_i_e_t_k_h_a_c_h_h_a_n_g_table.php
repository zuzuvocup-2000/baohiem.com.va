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
        Schema::rename('TBL_CHITIETKHACHHANG', 'tbl_customer_detail');

        Schema::table('tbl_customer_detail', function (Blueprint $table) {
            $table->renameColumn('MACHITIETKHACHHANG', 'id');
            $table->renameColumn('MAKHACHHANG', 'customer_id');
            $table->renameColumn('MAKHACHHANG_CB', 'customer_cb_id');
            $table->renameColumn('LOGDATE', 'log_date');
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
        Schema::table('TBL_CHITIETKHACHHANG', function (Blueprint $table) {
            //
        });
    }
};
