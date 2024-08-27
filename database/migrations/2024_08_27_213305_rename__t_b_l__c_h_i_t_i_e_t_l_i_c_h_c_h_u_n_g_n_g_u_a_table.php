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
        Schema::rename('TBL_CHITIETLICHCHUNGNGUA', 'tbl_vaccination_schedule_detail');

        Schema::table('tbl_vaccination_schedule_detail', function (Blueprint $table) {
            $table->renameColumn('MACHITIETLICH', 'id');
            $table->renameColumn('MACHUNGNGUA', 'vaccination_id');
            $table->renameColumn('SOTHANGCACHLANTRUOC', 'distance');
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
        Schema::table('TBL_CHITIETLICHCHUNGNGUA', function (Blueprint $table) {
            //
        });
    }
};
