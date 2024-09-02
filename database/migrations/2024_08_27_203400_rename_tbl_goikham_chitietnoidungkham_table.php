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
        Schema::rename('tbl_#goikham_chitietnoidungkham', 'tbl_detailed_examination_content');

        Schema::table('tbl_detailed_examination_content', function (Blueprint $table) {
            $table->renameColumn('machitietnoidungkham', 'id');
            $table->renameColumn('manoidungkham', 'examination_content_id');
            $table->renameColumn('madanhmuckhamchuyenkhoa', 'category_specialist_examination_id');
            $table->renameColumn('madanhmucchidinhxetnghiem', 'category_test_indications_id');
            $table->renameColumn('madanhmucchidinhcdha', 'category_cdha_id');
            $table->renameColumn('madieukienthuchien', 'condition_id');
            $table->renameColumn('active', 'active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_#goikham_chitietnoidungkham', function (Blueprint $table) {
            //
        });
    }
};
