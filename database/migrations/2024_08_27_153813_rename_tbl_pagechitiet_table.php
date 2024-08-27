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
        Schema::rename('TBL_pagechitiet', 'tbl_page_detail');

        Schema::table('tbl_page_detail', function (Blueprint $table) {
            $table->renameColumn('machitiettrang', 'id');
            $table->renameColumn('Maquyen', 'authority_id');
            $table->renameColumn('matrang', 'page_id');
            $table->renameColumn('active', 'active');
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
