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
        Schema::rename('TBL_CHITIETCHITRA', 'tbl_payment_detail');

        Schema::table('tbl_payment_detail', function (Blueprint $table) {
            $table->renameColumn('MACHITIETCHITRA', 'id');
            $table->renameColumn('MAUSER', 'user_id');
            $table->renameColumn('MACHITIETTAIKHOAN', 'account_detail_id');
            $table->renameColumn('MABENHVIEN', 'hospital_id');
            $table->renameColumn('SOTIENCHITRA', 'amount_paid');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('NGAYCHI', 'payment_date');
            $table->renameColumn('GHICHU', 'note');
            $table->renameColumn('NGAYKHAM', 'examination_date');
            $table->renameColumn('DADUYET', 'approved');
            $table->renameColumn('UOCCHI', 'expected_payment');
            $table->renameColumn('MALOAICHI', 'payment_type_id');
            $table->renameColumn('MAUSER_BENHVIEN', 'hospital_user_id');
            $table->renameColumn('sotienbituchoi', 'rejected_amount');
            $table->renameColumn('logdate', 'log_date');
            $table->renameColumn('MANOIDUNGDIEUTRI', 'treatment_code');
            $table->renameColumn('MAKQCHUNGNGUA', 'vaccine_result_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_payment_detail', function (Blueprint $table) {
            $table->renameColumn('id', 'MACHITIETCHITRA');
            $table->renameColumn('user_id', 'MAUSER');
            $table->renameColumn('account_detail_id', 'MACHITIETTAIKHOAN');
            $table->renameColumn('hospital_id', 'MABENHVIEN');
            $table->renameColumn('amount_paid', 'SOTIENCHITRA');
            $table->renameColumn('active', 'ACTIVE');
            $table->renameColumn('payment_date', 'NGAYCHI');
            $table->renameColumn('note', 'GHICHU');
            $table->renameColumn('examination_date', 'NGAYKHAM');
            $table->renameColumn('approved', 'DADUYET');
            $table->renameColumn('expected_payment', 'UOCCHI');
            $table->renameColumn('payment_type_id', 'MALOAICHI');
            $table->renameColumn('hospital_user_id', 'MAUSER_BENHVIEN');
            $table->renameColumn('rejected_amount', 'sotienbituchoi');
            $table->renameColumn('log_date', 'logdate');
            $table->renameColumn('treatment_code', 'MANOIDUNGDIEUTRI');
            $table->renameColumn('vaccine_result_code', 'MAKQCHUNGNGUA');
        });

        Schema::rename('tbl_payment_detail', 'TBL_CHITIETCHITRA');
    }
};
