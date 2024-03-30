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
        Schema::table('tbl_IDC10DANHSACHANDOAN', function (Blueprint $table) {
            $table->renameColumn('MAICD10', 'id');
            $table->renameColumn('TENICD10', 'icd10_name');
            $table->renameColumn('CODEICD10', 'icd10_code');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('TenTA', 'international_name');
            $table->renameColumn('machuong', 'idc10_diagnosis_chapter_id');
        });
        Schema::rename('tbl_IDC10DANHSACHANDOAN', 'tbl_idc10_diagnosis_list');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_IDC10DANHSACHANDOAN', function (Blueprint $table) {
            //
        });
    }
};
