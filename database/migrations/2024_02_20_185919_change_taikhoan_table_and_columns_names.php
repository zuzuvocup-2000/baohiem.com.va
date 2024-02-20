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
        Schema::rename('TBL_TAIKHOAN', 'tbl_account');

        Schema::table('tbl_account', function (Blueprint $table) {
            $table->renameColumn('MATAIKHOAN', 'id');
            $table->renameColumn('MAGOIACCOUNT', 'account_code');
            $table->renameColumn('MAHOPDONG', 'contract_id');
            $table->renameColumn('GHICHU', 'note');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('staffcode', 'staff_code');
            $table->renameColumn('NGAYBATDAU', 'start_date');
            $table->renameColumn('NGAYKETTHUC', 'end_date');
            $table->renameColumn('Logdate', 'log_date');
            $table->renameColumn('tienquygiulai', 'reserve_amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_account', function (Blueprint $table) {
            $table->renameColumn('id', 'MATAIKHOAN');
            $table->renameColumn('account_code', 'MAGOIACCOUNT');
            $table->renameColumn('contract_id', 'MAHOPDONG');
            $table->renameColumn('note', 'GHICHU');
            $table->renameColumn('active', 'ACTIVE');
            $table->renameColumn('staff_code', 'staffcode');
            $table->renameColumn('start_date', 'NGAYBATDAU');
            $table->renameColumn('end_date', 'NGAYKETTHUC');
            $table->renameColumn('log_date', 'Logdate');
            $table->renameColumn('reserve_amount', 'tienquygiulai');
        });

        Schema::rename('tbl_account', 'TBL_TAIKHOAN');
    }
};
