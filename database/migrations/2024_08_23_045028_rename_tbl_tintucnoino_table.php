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
        Schema::rename('TBL_TINTUCNOIBO', 'tbl_internal_news');

        Schema::table('tbl_internal_news', function (Blueprint $table) {
            $table->renameColumn('matintucnoibo', 'id');
            $table->renameColumn('tieude', 'title');
            $table->renameColumn('thongtinngan', 'description');
            $table->renameColumn('thongtindaydu', 'content');
            $table->renameColumn('nguon', 'source');
            $table->renameColumn('ngaydang', 'date');
            $table->renameColumn('status_kichhoat', 'status');
            $table->renameColumn('active', 'active');
            $table->renameColumn('Mauser', 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_TINTUCNOIBO', function (Blueprint $table) {
            //
        });
    }
};
