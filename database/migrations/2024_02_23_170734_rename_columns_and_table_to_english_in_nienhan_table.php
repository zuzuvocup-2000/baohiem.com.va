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
        Schema::rename('tbl_nienhan', 'tbl_period');
        Schema::table('tbl_period', function (Blueprint $table) {
            $table->renameColumn('manienhan', 'id');
            $table->renameColumn('tennienhan', 'period_name');
            $table->renameColumn('logdate', 'log_date');
            $table->renameColumn('tunam', 'from_year');
            $table->renameColumn('dennam', 'to_year');
            $table->renameColumn('Thutu', 'order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_period', function (Blueprint $table) {
            $table->renameColumn('id', 'manienhan');
            $table->renameColumn('period_name', 'tennienhan');
            $table->renameColumn('log_date', 'logdate');
            $table->renameColumn('from_year', 'tunam');
            $table->renameColumn('to_year', 'dennam');
            $table->renameColumn('order', 'Thutu');
        });

        Schema::rename('tbl_period', 'tbl_nienhan');
    }
};
