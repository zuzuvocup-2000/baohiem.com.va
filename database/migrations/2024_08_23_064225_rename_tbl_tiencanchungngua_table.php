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
        Schema::rename('TBL_TIENCANCHUNGNGUA', 'tbl_vaccination_history');
        Schema::table('tbl_vaccination_history', function (Blueprint $table) {
            $table->renameColumn('MATIENCANTIEMCHUNG', 'id');
            $table->renameColumn('MATAIKHOANSUCKHOE', 'relationship_id');
            $table->renameColumn('MACHUNGNGUA', 'vaccination_id');
            $table->renameColumn('SOLAN', 'amount');
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
        Schema::table('TBL_TIENCANCHUNGNGUA', function (Blueprint $table) {
            //
        });
    }
};
