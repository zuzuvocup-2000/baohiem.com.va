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
        Schema::table('tbl_IDC10chandoanchuong', function (Blueprint $table) {
            $table->renameColumn('Machuongchandoan', 'id');
            $table->renameColumn('Tenchuongchandoan', 'chapter_name');
            $table->renameColumn('Souutien', 'order');
            $table->renameColumn('Benhthuonggap', 'common_diseases');
            $table->renameColumn('TenTA', 'international_name');
        });

        Schema::rename('tbl_IDC10chandoanchuong', 'tbl_idc10_diagnosis_chapter');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_IDC10chandoanchuong', function (Blueprint $table) {
            //
        });
    }
};
