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
        Schema::rename('TBL_LOGKHACHHANG', 'tbl_log_customer');

        Schema::table('tbl_log_customer', function (Blueprint $table) {
            $table->renameColumn('malogkhachhang', 'id');
            $table->renameColumn('Mauserkhachhang', 'customer_id');
            $table->renameColumn('active', 'active');
            $table->renameColumn('logdate', 'log_date');
            $table->renameColumn('hanhdong', 'action');
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
        Schema::table('TBL_LOGKHACHHANG', function (Blueprint $table) {
            //
        });
    }
};
