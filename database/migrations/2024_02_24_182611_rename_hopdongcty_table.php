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
        Schema::table('TBL_HOPDONGCTY', function (Blueprint $table) {
            $table->renameColumn('MAHOPDONG', 'id');
            $table->renameColumn('SOHOPDONG_PHULUC', 'contract_supplement_number');
            $table->renameColumn('NGAYKY', 'signature_date');
            $table->renameColumn('THOIGIANHIEULUC', 'effective_time');
            $table->renameColumn('THOIGIANKETTHUC', 'end_time');
            $table->renameColumn('TONGGIATRIHD', 'total_contract_value');
            $table->renameColumn('TONGSOKHACHHANG', 'total_customers');
            $table->renameColumn('PHULUC', 'supplement');
            $table->renameColumn('SOHDPHULUCTHAMKHAO', 'reference_contract_supplement_number');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('TENHOPDONG', 'contract_name');
            $table->renameColumn('mauser', 'user_id');
            $table->renameColumn('giahan', 'extension');
            $table->renameColumn('mahopdongcu', 'previous_contract_code');
            $table->renameColumn('machitietnienhan', 'period_id');
            $table->renameColumn('tenfile', 'file_name');
            $table->renameColumn('folder', 'folder');
            $table->renameColumn('HDGAS', 'gas_contract');
        });

        Schema::rename('TBL_HOPDONGCTY', 'tbl_contract');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_contract', function (Blueprint $table) {
            $table->renameColumn('id', 'MAHOPDONG');
            $table->renameColumn('contract_supplement_number', 'SOHOPDONG_PHULUC');
            $table->renameColumn('signature_date', 'NGAYKY');
            $table->renameColumn('effective_time', 'THOIGIANHIEULUC');
            $table->renameColumn('end_time', 'THOIGIANKETTHUC');
            $table->renameColumn('total_contract_value', 'TONGGIATRIHD');
            $table->renameColumn('total_customers', 'TONGSOKHACHHANG');
            $table->renameColumn('supplement', 'PHULUC');
            $table->renameColumn('reference_contract_supplement_number', 'SOHDPHULUCTHAMKHAO');
            $table->renameColumn('active', 'ACTIVE');
            $table->renameColumn('contract_name', 'TENHOPDONG');
            $table->renameColumn('user_id', 'mauser');
            $table->renameColumn('extension', 'giahan');
            $table->renameColumn('previous_contract_code', 'mahopdongcu');
            $table->renameColumn('period_id', 'machitietnienhan');
            $table->renameColumn('file_name', 'tenfile');
            $table->renameColumn('folder', 'folder');
            $table->renameColumn('gas_contract', 'HDGAS');
        });

        Schema::rename('tbl_contract', 'TBL_HOPDONGCTY');
    }
};
