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
        Schema::rename('TBL_DANHMUCSKTONGQUAT', 'tbl_general_health_category');

        Schema::table('tbl_general_health_category', function (Blueprint $table) {
            $table->renameColumn('MAPHANLOAISKTONGQUAT', 'classify_general_health_id');
            $table->renameColumn('MADANHMUCSKTONGQUAT', 'id');
            $table->renameColumn('TENSKTONGQUAT', 'general_health_name');
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
        Schema::table('TBL_DANHMUCSKTONGQUAT', function (Blueprint $table) {
            //
        });
    }
};
