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
        Schema::rename('TBL_DANHSACHCHUNGNGUA', 'tbl_vaccination_list');

        Schema::table('tbl_vaccination_list', function (Blueprint $table) {
            $table->renameColumn('MACHUNGNGUA', 'id');
            $table->renameColumn('MAPHANLOAICHUNGNGUA', 'vaccination_classification_id');
            $table->renameColumn('active', 'active');
            $table->renameColumn('TENCHUNGNGUA', 'vaccination_name');
            $table->renameColumn('GHICHU', 'note');
            $table->renameColumn('solanchungngua', 'amount_vaccination');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_DANHSACHCHUNGNGUA', function (Blueprint $table) {
            //
        });
    }
};
