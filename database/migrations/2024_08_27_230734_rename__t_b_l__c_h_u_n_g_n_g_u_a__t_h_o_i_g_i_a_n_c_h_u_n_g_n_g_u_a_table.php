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
        Schema::rename('TBL_CHUNGNGUA_THOIGIANCHUNGNGUA', 'tbl_vaccination_time');

        Schema::table('tbl_vaccination_time', function (Blueprint $table) {
            $table->renameColumn('MATHOIGIANCHUNGNGUA', 'id');
            $table->renameColumn('THOIGIANCHUNG', 'vaccination_time');
            $table->renameColumn('GHICHU', 'note');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('sothutu', 'order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_CHUNGNGUA_THOIGIANCHUNGNGUA', function (Blueprint $table) {
            //
        });
    }
};
