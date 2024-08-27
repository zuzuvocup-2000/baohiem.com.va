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
        Schema::rename('TBL_pagetest', 'tbl_page_test');

        Schema::table('tbl_page_test', function (Blueprint $table) {
            $table->renameColumn('matrang', 'id');
            $table->renameColumn('tentrang', 'page_name');
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
        Schema::table('TBL_pagetest', function (Blueprint $table) {
            //
        });
    }
};
