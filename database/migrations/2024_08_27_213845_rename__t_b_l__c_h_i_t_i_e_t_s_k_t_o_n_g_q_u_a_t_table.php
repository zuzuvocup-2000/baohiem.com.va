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
        Schema::rename('TBL_CHITIETSKTONGQUAT', 'tbl_general_health_details');

        Schema::table('tbl_general_health_details', function (Blueprint $table) {
            $table->renameColumn('MATAIKHOANSUCKHOE', 'id');
            $table->renameColumn('MAUSER', 'user_id');
            $table->renameColumn('MAPHANLOAISKTONGQUAT', 'classify_general_health_id');
            $table->renameColumn('MACHITIETSKTONGQUAT', 'general_health_details_id');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('KETQUA', 'result');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_CHITIETSKTONGQUAT', function (Blueprint $table) {
            //
        });
    }
};
