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
        Schema::rename('TBL_PHANLOAICHUNGNGUA', 'tbl_classify_vaccination');

        Schema::table('tbl_classify_vaccination', function (Blueprint $table) {
            $table->renameColumn('MAPHANLOAICHUNGNGUA', 'id');
            $table->renameColumn('CHUNGNGUABATBUOC', 'compulsory_vaccination');
            $table->renameColumn('TENPHANLOAI', 'classify_name');
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
        Schema::table('TBL_PHANLOAICHUNGNGUA', function (Blueprint $table) {
            //
        });
    }
};
