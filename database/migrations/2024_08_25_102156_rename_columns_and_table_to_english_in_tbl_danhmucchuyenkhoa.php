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
        Schema::rename('TBL_DANHMUCCHUYENKHOA', 'tbl_specialty');

        // Rename the columns
        Schema::table('tbl_specialty', function (Blueprint $table) {
            $table->renameColumn('MADANHMUCCHUYENKHOA', 'id');
            $table->renameColumn('TENCHUYENKHOA', 'specialty_name');
            $table->renameColumn('maphongkham', 'clinic_id');
            $table->renameColumn('ACTIVE', 'active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_DANHMUCCHUYENKHOA', function (Blueprint $table) {
            $table->renameColumn('id', 'MADANHMUCCHUYENKHOA');
            $table->renameColumn('specialty_name', 'TENCHUYENKHOA');
            $table->renameColumn('clinic_id', 'maphongkham');
            $table->renameColumn('active', 'ACTIVE');
        });
    }
};
