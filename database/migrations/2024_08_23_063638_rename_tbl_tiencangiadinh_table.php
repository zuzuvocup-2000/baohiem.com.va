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
        Schema::rename('TBL_TIENCANGIADINH', 'tbl_family_relationships');

        Schema::table('tbl_family_relationships', function (Blueprint $table) {
            $table->renameColumn('MATIENCANGIADINH', 'id');
            $table->renameColumn('MAQUANHE', 'relationship_id');
            $table->renameColumn('TIENCANGIADINH', 'disease_genes');
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
        Schema::table('TBL_TIENCANGIADINH', function (Blueprint $table) {
            //
        });
    }
};
