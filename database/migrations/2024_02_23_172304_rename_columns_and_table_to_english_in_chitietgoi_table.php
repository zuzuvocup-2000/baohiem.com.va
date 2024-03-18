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
        Schema::table('TBL_CHITIET_GOI', function (Blueprint $table) {
            $table->renameColumn('machitietgoi', 'id');
            $table->renameColumn('magoiaccount', 'account_package_id');
            $table->renameColumn('active', 'active');
            $table->renameColumn('macongty', 'company_id');
            $table->renameColumn('manienhan', 'period_id');
        });

        Schema::rename('TBL_CHITIET_GOI', 'tbl_package_detail');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_CHITIET_GOI', function (Blueprint $table) {
            $table->renameColumn('id', 'machitietgoi');
            $table->renameColumn('account_package_id', 'magoiaccount');
            $table->renameColumn('active', 'active');
            $table->renameColumn('company_id', 'macongty');
            $table->renameColumn('period_id', 'manienhan');
        });

        Schema::rename('tbl_package_detail', 'TBL_CHITIET_GOI');
    }
};
