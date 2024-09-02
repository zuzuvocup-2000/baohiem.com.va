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
        Schema::rename('tbl_chungngua_danhsachCHUNGNGUA', 'tbl_vaccination');

        // Đổi tên các cột
        Schema::table('tbl_vaccination', function (Blueprint $table) {
            $table->renameColumn('MACHUNGNGUA', 'id');
            $table->renameColumn('TENCHUNGNGUA', 'vaccination');
            $table->renameColumn('tenvaxcin', 'vaccine_name');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('LIEULUONG', 'dosage');
            $table->renameColumn('CHIDINH', 'indication');
            $table->renameColumn('TREEM', 'for_children');
            $table->renameColumn('MAPHANLOAICHUNGNGUA', 'classification_id');
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
