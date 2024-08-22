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
        Schema::rename('TBL_QUANHE', 'tbl_relationship');

        // Rename the columns
        Schema::table('tbl_relationship', function (Blueprint $table) {
            $table->renameColumn('MAQUANHE', 'id');
            $table->renameColumn('TENQUANHE', 'relationship_name');
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
        Schema::table('TBL_QUANHE', function (Blueprint $table) {
            //
        });
    }
};
