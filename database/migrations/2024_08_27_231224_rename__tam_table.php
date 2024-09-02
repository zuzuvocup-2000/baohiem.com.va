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
        Schema::rename('Tam', 'tbl_temporary');

        Schema::table('tbl_temporary', function (Blueprint $table) {
            $table->renameColumn('Matam', 'id');
            $table->renameColumn('Tenkhongco', 'name_empty');
            $table->renameColumn('Matkkhongco', 'pass_empty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Tam', function (Blueprint $table) {
            //
        });
    }
};
