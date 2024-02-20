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
        Schema::rename('TBL_PHANNHOMKHACHHANG', 'tbl_customer_group');

        Schema::table('tbl_customer_group', function (Blueprint $table) {
            $table->renameColumn('MAPHANNHOMKHACHHANG', 'id');
            $table->renameColumn('TENNHOMKHACHHANG', 'group_name');
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
        Schema::table('tbl_customer_group', function (Blueprint $table) {
            $table->renameColumn('id', 'MAPHANNHOMKHACHHANG');
            $table->renameColumn('group_name', 'TENNHOMKHACHHANG');
            $table->renameColumn('active', 'ACTIVE');
        });

        Schema::rename('tbl_customer_group', 'TBL_PHANNHOMKHACHHANG');
    }
};
