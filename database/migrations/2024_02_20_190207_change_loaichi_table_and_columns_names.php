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
        Schema::rename('TBL_LOAICHI', 'tbl_payment_type');

        Schema::table('tbl_payment_type', function (Blueprint $table) {
            $table->renameColumn('MALOAICHI', 'id');
            $table->renameColumn('TENLOAICHI', 'payment_type_name');
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
        Schema::table('tbl_payment_type', function (Blueprint $table) {
            $table->renameColumn('id', 'MALOAICHI');
            $table->renameColumn('payment_type_name', 'TENLOAICHI');
            $table->renameColumn('active', 'ACTIVE');
        });

        Schema::rename('tbl_payment_type', 'TBL_LOAICHI');
    }
};
