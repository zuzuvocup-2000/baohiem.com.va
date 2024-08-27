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
        Schema::rename('TBL_page_quyen', 'tbl_page_authority');

        Schema::table('tbl_page_authority', function (Blueprint $table) {
            $table->renameColumn('Maquyen', 'id');
            $table->renameColumn('quyentruycap', 'access');
            $table->renameColumn('active', 'active');
            $table->renameColumn('Khachang', 'customer');
            $table->renameColumn('benhvien', 'hospital');
            $table->renameColumn('nhansu', 'staff');
            $table->renameColumn('benhvien_kb', 'hospital_kb');
            $table->renameColumn('khachhang_kb', 'customer_kb');
            $table->renameColumn('pviadmin', 'pviadmin');
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
