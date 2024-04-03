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
        Schema::rename('tbl_phanloaikhachhang_theobenhvien', 'tbl_customer_type');

        Schema::table('tbl_customer_type', function (Blueprint $table) {
            $table->renameColumn('maphanloaiKH_BV', 'id');
            $table->renameColumn('tenphanloai', 'type_name');
            $table->renameColumn('active', 'active');
            $table->renameColumn('thutu', 'order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_customer_type', function (Blueprint $table) {
            $table->renameColumn('id', 'maphanloaiKH_BV');
            $table->renameColumn('type_name', 'tenphanloai');
            $table->renameColumn('active', 'active');
            $table->renameColumn('order', 'thutu');
        });

        Schema::rename('tbl_customer_type', 'tbl_phanloaikhachhang_theobenhvien');
    }
};
