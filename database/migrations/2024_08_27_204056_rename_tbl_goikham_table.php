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
        Schema::rename('tbl_$goikham', 'tbl_examination_package');

        Schema::table('tbl_examination_package', function (Blueprint $table) {
            $table->renameColumn('magoikham', 'id');
            $table->renameColumn('tengoikham', 'package_name');
            $table->renameColumn('Ghichu', 'note');
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
        Schema::table('tbl_$goikham', function (Blueprint $table) {
            //
        });
    }
};
