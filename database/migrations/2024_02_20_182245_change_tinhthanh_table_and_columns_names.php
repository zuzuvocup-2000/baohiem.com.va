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
        Schema::rename('TBL_TINHTHANH', 'tbl_province');

        Schema::table('tbl_province', function (Blueprint $table) {
            $table->renameColumn('MATINHTHANH', 'id');
            $table->renameColumn('TENTINHTHANH', 'province_name');
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
        Schema::table('tbl_province', function (Blueprint $table) {
            $table->renameColumn('id', 'MATINHTHANH');
            $table->renameColumn('province_name', 'TENTINHTHANH');
            $table->renameColumn('active', 'ACTIVE');
        });

        Schema::rename('tbl_province', 'TBL_TINHTHANH');
    }
};
