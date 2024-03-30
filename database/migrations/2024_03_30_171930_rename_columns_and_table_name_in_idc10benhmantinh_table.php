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
        Schema::rename('tbl_IDC10benhmantinh', 'tbl_idc10_chronic_disease');

        Schema::table('tbl_idc10_chronic_disease', function (Blueprint $table) {
            $table->renameColumn('mabenhmantinh', 'id');
            $table->renameColumn('active', 'active');
            $table->renameColumn('MAICD10', 'idc10_diagnosis_list_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};
