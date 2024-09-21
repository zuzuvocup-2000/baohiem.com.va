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
        Schema::table('tbl_test_order', function (Blueprint $table) {
            $table->renameColumn('test_catalogue_id', 'test_category_id');
        });
        Schema::table('tbl_test_detail', function (Blueprint $table) {
            $table->renameColumn('test_catalogue_id', 'test_category_id');
        });
        Schema::table('tbl_examination_package_details', function (Blueprint $table) {
            $table->renameColumn('specialty_catalogue_id', 'specialty_category_id');
        });
        Schema::rename('tbl_test_catalogue', 'tbl_test_category');
        Schema::table('tbl_test_category', function (Blueprint $table) {
            $table->renameColumn('test_catalogue_name', 'test_category_name');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('name_to_catagory', function (Blueprint $table) {
            //
        });
    }
};
