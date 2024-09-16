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
        Schema::rename('tbl_$goikham_chitietloaitru', 'tbl_examination_package_exclusion_detail');

        Schema::table('tbl_examination_package_exclusion_detail', function (Blueprint $table) {
            $table->renameColumn('machitietloaitru', 'id');
            $table->renameColumn('machitietgoikham', 'examination_package_details_id');
            $table->renameColumn('machitietnoidungkham', 'detailed_examination_content_id');
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
        Schema::table('tbl_$goikham_chitietloaitru', function (Blueprint $table) {
            //
        });
    }
};
