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
        Schema::rename('tbl_log_usernhansu', 'tbl_log_user_staff');

        Schema::table('tbl_log_user_staff', function (Blueprint $table) {
            $table->renameColumn('malogusernhansu', 'id');
            $table->renameColumn('mauser_nhansu', 'staff_id');
            $table->renameColumn('active', 'active');
            $table->renameColumn('hanhdong', 'action');
            $table->renameColumn('logdate', 'log_date');
            $table->renameColumn('localIP', 'local_ip');
            $table->renameColumn('Computername', 'computer_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_log_usernhansu', function (Blueprint $table) {
            //
        });
    }
};
