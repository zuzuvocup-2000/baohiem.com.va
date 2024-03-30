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
        Schema::table('TBL_TINHTRANGGIADINH', function (Blueprint $table) {
            $table->renameColumn('MATINHTRANGGIADINH', 'id');
            $table->renameColumn('DOCTHAN', 'single');
            $table->renameColumn('KETHON', 'married');
            $table->renameColumn('LYDI', 'divorced');
            $table->renameColumn('ACTIVE', 'active');
        });

        Schema::rename('TBL_TINHTRANGGIADINH', 'tbl_family_status');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('TBL_TINHTRANGGIADINH', function (Blueprint $table) {
            //
        });
    }
};
