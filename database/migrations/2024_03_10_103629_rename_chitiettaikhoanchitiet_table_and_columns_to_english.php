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
        Schema::rename('chitiettaikhoan_chitiet', 'tbl_account_detail_detail');

        Schema::table('tbl_account_detail_detail', function (Blueprint $table) {
            $table->renameColumn('machitiettaikhoa_chitiet', 'id');
            $table->renameColumn('machitietgoi', 'package_detail_id');
            $table->renameColumn('mataikhoan', 'account_id');
            $table->renameColumn('dukytruoc', 'prepayment');
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
        Schema::rename('tbl_account_detail_detail', 'chitiettaikhoan_chitiet');

        Schema::table('chitiettaikhoan_chitiet', function (Blueprint $table) {
            $table->renameColumn('account_detail_id', 'id');
            $table->renameColumn('package_detail_id', 'machitietgoi');
            $table->renameColumn('account_id', 'mataikhoan');
            $table->renameColumn('prepayment', 'dukytruoc');
            $table->renameColumn('log_date', 'logdate');
            $table->renameColumn('active', 'active');
        });
    }
};
