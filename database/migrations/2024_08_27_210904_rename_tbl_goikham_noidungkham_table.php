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
        Schema::rename('tbl_$goikham_noidungkham', 'tbl_examination_package_content');

        Schema::table('tbl_examination_package_content', function (Blueprint $table) {
            $table->renameColumn('manoidungkham', 'id');
            $table->renameColumn('codenoidung', 'content_code');
            $table->renameColumn('active', 'active');
            $table->renameColumn('Ghichu', 'note');
            $table->renameColumn('noidung', 'content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_$goikham_noidungkham', function (Blueprint $table) {
            //
        });
    }
};
