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
        Schema::rename('tbl_GasDanhsachhopdong', 'tbl_gas_contract_list');

        Schema::table('tbl_gas_contract_list', function (Blueprint $table) {
            $table->renameColumn('MaChitietHD', 'id');
            $table->renameColumn('Mahopdong', 'contract_id');
            $table->renameColumn('Gas', 'gas');
            $table->renameColumn('CL', 'cl');
            $table->renameColumn('Active', 'active');
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
