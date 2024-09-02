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
        Schema::rename('TBL_TINTUCKHACHHANG', 'tbl_customer_news');

        Schema::table('tbl_customer_news', function (Blueprint $table) {
            $table->renameColumn('matintuckhachhang', 'id');
            $table->renameColumn('tieude', 'title');
            $table->renameColumn('noidungngan', 'description');
            $table->renameColumn('noidungdaydu', 'content');
            $table->renameColumn('nguon', 'source');
            $table->renameColumn('ngaydang', 'date');
            $table->renameColumn('status_kichhoat', 'status');
            $table->renameColumn('active', 'active');
            $table->renameColumn('mauser', 'user_id');
            $table->renameColumn('Logdate', 'log_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_TINTUCKHACHHANG', function (Blueprint $table) {
            //
        });
    }
};
