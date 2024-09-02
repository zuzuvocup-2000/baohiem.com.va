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
        Schema::rename('TBL_FILEDINHKEM', 'tbl_file');

        Schema::table('tbl_file', function (Blueprint $table) {
            $table->renameColumn('MAFILEDINHKEM', 'id');
            $table->renameColumn('TENFILE', 'file_name');
            $table->renameColumn('FOLDER', 'folder');
            $table->renameColumn('GHICHU', 'note');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('MADOTKHAM', 'health_checkup_information_id');
            $table->renameColumn('LOGDATE', 'log_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_FILEDINHKEM', function (Blueprint $table) {
            //
        });
    }
};
