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
        Schema::table('tbl_examination_package_details', function (Blueprint $table) {
            $table->renameColumn('cdha_category_id', 'diag_imaging_category_id');
        });
        Schema::table('tbl_detailed_examination_content', function (Blueprint $table) {
            $table->renameColumn('category_cdha_id', 'diag_imaging_category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
