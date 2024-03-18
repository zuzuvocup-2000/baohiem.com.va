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
        Schema::table('TBL_thongtintheBH', function (Blueprint $table) {
            $table->renameColumn('Mathongtinthe', 'id');
            $table->renameColumn('Makhachhang', 'customer_id');
            $table->renameColumn('sothe', 'card_number');
            $table->renameColumn('loaithe', 'card_type');
            $table->renameColumn('ngaycap', 'issued_date');
            $table->renameColumn('active', 'active');
            $table->renameColumn('sothecu', 'old_card_number');
        });

        Schema::rename('TBL_thongtintheBH', 'tbl_information_insurance');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('english_in_tbl_thongtinthebh', function (Blueprint $table) {
            //
        });
    }
};
