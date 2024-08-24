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
        Schema::rename('TBL_VANPHONGCHINHANH', 'tbl_branch_office');

        Schema::table('tbl_branch_office', function (Blueprint $table) {
            $table->renameColumn('MAVANPHONG', 'id');
            $table->renameColumn('MAPHONGBAN', 'department_id');
            $table->renameColumn('MATINHTHANH', 'province_id');
            $table->renameColumn('TENVANPHONG', 'name');
            $table->renameColumn('DIACHIVANPHONG', 'address');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('DIENTHOAIVANPHONG', 'phone_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_VANPHONGCHINHANH', function (Blueprint $table) {
            //
        });
    }
};
