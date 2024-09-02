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
        Schema::rename('tbl_chungngua_LICHCHUNGNGUA', 'tbl_vaccination_schedule');

        Schema::table('tbl_vaccination_schedule', function (Blueprint $table) {
            $table->renameColumn('MALICHCHUNGNGUA', 'id');
            $table->renameColumn('MACHUNGNGUA', 'vaccination_id');
            $table->renameColumn('sothangcachlan1', 'months_to_first');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('nhaclai', 'repeat');
            $table->renameColumn('sothangnhaclai', 'months_to_repeat');
            $table->renameColumn('tenlantiem', 'injection_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_chungngua_LICHCHUNGNGUA', function (Blueprint $table) {
            //
        });
    }
};
