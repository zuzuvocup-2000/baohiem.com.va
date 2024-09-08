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
        Schema::rename('TBL_CHITIETCHUNGNGUA', 'tbl_vaccination_detail');

        Schema::table('tbl_vaccination_detail', function (Blueprint $table) {
            $table->renameColumn('MACHITIETCHUNGNUA', 'id');
            $table->renameColumn('MATAIKHOANSUCKHOE', 'health_account_id');
            $table->renameColumn('MACHITIETLICH', 'vaccination_schedule_detail_id');
            $table->renameColumn('MAUSER', 'user_id');
            $table->renameColumn('NGAYCHUNG', 'vaccination_date');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('GHICHU', 'note');
            $table->renameColumn('DUNGLICH', 'calendar_true');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_CHITIETCHUNGNGUA', function (Blueprint $table) {
            //
        });
    }
};
