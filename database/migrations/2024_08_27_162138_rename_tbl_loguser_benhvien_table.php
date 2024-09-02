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
        Schema::rename('tbl_loguser_benhvien', 'tbl_loguser_hospital');

        Schema::table('tbl_loguser_hospital', function (Blueprint $table) {
            $table->renameColumn('MALOGUSER_BENHVIEN', 'id');
            $table->renameColumn('MAUSER_BENHVIEN', 'hospital_user_id');
            $table->renameColumn('active', 'active');
            $table->renameColumn('logdate', 'log_date');
            $table->renameColumn('hanhdong', 'action');
            $table->renameColumn('localIP', 'local_ip');
            $table->renameColumn('Computername', 'computer_name');
            $table->renameColumn('giatricu', 'old_value');
            $table->renameColumn('machitietchitramoi', 'payment_detail_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_loguser_benhvien', function (Blueprint $table) {
            //
        });
    }
};
