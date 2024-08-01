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
        Schema::rename('TBL_VITRICHUCVU', 'tbl_position');

        Schema::table('tbl_position', function (Blueprint $table) {
            $table->renameColumn('MAVITRICHUCVU', 'id');
            $table->renameColumn('TENVITRICHUCVU', 'name');
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
    }
};
