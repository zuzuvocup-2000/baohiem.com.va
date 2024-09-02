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
        Schema::rename('tbl_$goikham_dieukienthuchien', 'tbl_examination_package_condition');

        Schema::table('tbl_examination_package_condition', function (Blueprint $table) {
            $table->renameColumn('madieukienthuchien', 'id');
            $table->renameColumn('tendieukien', 'condition_name');
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
        Schema::table('tbl_$goikham_dieukienthuchien', function (Blueprint $table) {
            //
        });
    }
};
