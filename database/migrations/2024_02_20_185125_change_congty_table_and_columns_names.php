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
        Schema::rename('TBL_CONGTY', 'tbl_company');

        Schema::table('tbl_company', function (Blueprint $table) {
            $table->renameColumn('MACONGTY', 'id');
            $table->renameColumn('MATINHTHANH', 'province_id');
            $table->renameColumn('TENCONGTY', 'company_name');
            $table->renameColumn('DIACHI', 'address');
            $table->renameColumn('SODIENTHOAI', 'phone_number');
            $table->renameColumn('EMAIL', 'email');
            $table->renameColumn('WEBSITE', 'website');
            $table->renameColumn('TENGIAMDOC', 'ceo_name');
            $table->renameColumn('TENCANBOTRACHNHIEM', 'responsibility_officer_name');
            $table->renameColumn('ACTIVE', 'active');
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
        Schema::table('tbl_company', function (Blueprint $table) {
            $table->renameColumn('id', 'MACONGTY');
            $table->renameColumn('province_id', 'MATINHTHANH');
            $table->renameColumn('company_name', 'TENCONGTY');
            $table->renameColumn('address', 'DIACHI');
            $table->renameColumn('phone_number', 'SODIENTHOAI');
            $table->renameColumn('email', 'EMAIL');
            $table->renameColumn('website', 'WEBSITE');
            $table->renameColumn('ceo_name', 'TENGIAMDOC');
            $table->renameColumn('responsibility_officer_name', 'TENCANBOTRACHNHIEM');
            $table->renameColumn('active', 'ACTIVE');
            $table->renameColumn('order', 'thutu');
        });

        Schema::rename('tbl_company', 'TBL_CONGTY');
    }
};
