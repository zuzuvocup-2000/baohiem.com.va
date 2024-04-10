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
        Schema::rename('TBL_DANHSACHHOPDONG_BENHVIEN', 'tbl_contract_hospital');

        Schema::table('tbl_contract_hospital', function (Blueprint $table) {
            $table->renameColumn('MADSHOPDONG', 'id');
            $table->renameColumn('MAHOPDONG', 'contract_id');
            $table->renameColumn('MAUSER_BENHVIEN', 'user_hospital_id');
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
        //
    }
};
