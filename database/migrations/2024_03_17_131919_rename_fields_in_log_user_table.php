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
        Schema::table('TBL_LOGUSER', function (Blueprint $table) {
            $table->renameColumn('malog', 'id');
            $table->renameColumn('Mauser', 'user_id');
            $table->renameColumn('hanhdong', 'action');
            $table->renameColumn('datelog', 'date_log');
            $table->renameColumn('active', 'active');
            $table->renameColumn('localIP', 'local_ip');
            $table->renameColumn('Computername', 'computer_name');
            $table->renameColumn('giatricu', 'old_value');
            $table->renameColumn('machitietchitramoi', 'payment_detail_id');
        });
        Schema::rename('TBL_LOGUSER', 'tbl_log_user');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('log_user', function (Blueprint $table) {
            //
        });
    }
};
