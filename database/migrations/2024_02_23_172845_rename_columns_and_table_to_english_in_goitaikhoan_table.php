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
        Schema::table('TBL_GOITAIKHOAN', function (Blueprint $table) {
            $table->renameColumn('MAGOIACCOUNT', 'id');
            $table->renameColumn('TENGOIBH', 'package_name');
            $table->renameColumn('GIATRIGOI', 'package_price');
            $table->renameColumn('manienhan', 'period_id');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('GHICHU', 'note');
        });

        Schema::rename('TBL_GOITAIKHOAN', 'tbl_account_package');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_GOITAIKHOAN', function (Blueprint $table) {
            $table->renameColumn('id', 'MAGOIACCOUNT');
            $table->renameColumn('package_name', 'TENGOIBH');
            $table->renameColumn('package_price', 'GIATRIGOI');
            $table->renameColumn('period_id', 'manienhan');
            $table->renameColumn('active', 'ACTIVE');
            $table->renameColumn('note', 'GHICHU');
        });

        Schema::rename('tbl_account_package', 'TBL_GOITAIKHOAN');
    }
};
