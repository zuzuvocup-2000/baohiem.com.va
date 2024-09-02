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
        Schema::rename('tbl_chungngua_KQCHUNGNGUA', 'tbl_vaccination_result');

        Schema::table('tbl_vaccination_result', function (Blueprint $table) {
            $table->renameColumn('MAKQCHUNGNGUA', 'id');
            $table->renameColumn('MALICHCHUNGNGUA', 'vaccination_schedule_id');
            $table->renameColumn('makhachhang', 'customer_id');
            $table->renameColumn('GHICHU', 'note');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('ngaytiem', 'injection_date');
            $table->renameColumn('KQnhaclai', 'result_confirm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_chungngua_KQCHUNGNGUA', function (Blueprint $table) {
            //
        });
    }
};
