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
        Schema::rename('TBL_TIENSUBANTHAN', 'tbl_personal_achievements');

        Schema::table('tbl_personal_achievements', function (Blueprint $table) {
            $table->renameColumn('MATIENCANBANTHAN', 'id');
            $table->renameColumn('TIENCANBANTHAN', 'disease_name');
            $table->renameColumn('MATAIKHOANSUCKHOE', 'health_account_id');
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
        Schema::table('TBL_TIENSUBANTHAN', function (Blueprint $table) {
            //
        });
    }
};
