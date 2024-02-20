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
        Schema::rename('TBL_KHACHHANG', 'tbl_customer');

        Schema::table('tbl_customer', function (Blueprint $table) {
            $table->renameColumn('MAPHANNHOMKHACHHANG', 'customer_group_id');
            $table->renameColumn('MATINHTHANH', 'province_id');
            $table->renameColumn('TENHO', 'full_name');
            $table->renameColumn('NAMSINH', 'birth_year');
            $table->renameColumn('DIACHICUTRU', 'address');
            $table->renameColumn('SOCMND', 'identity_card_number');
            $table->renameColumn('NGAYCAPCMND', 'issue_date');
            $table->renameColumn('NOICAP', 'issue_place');
            $table->renameColumn('ID', 'customer_code');
            $table->renameColumn('DIENTHOAILIENLAC', 'contact_phone');
            $table->renameColumn('EMAIL', 'email');
            $table->renameColumn('ACTIVE', 'active');
            $table->renameColumn('mauser', 'user_id');
            $table->renameColumn('gioitinh', 'gender');
            $table->renameColumn('images', 'images');
            $table->renameColumn('FileData', 'file_data');
            $table->renameColumn('Filename', 'filename');
            $table->renameColumn('FileSize', 'file_size');
            $table->renameColumn('ContentType', 'content_type');
            $table->renameColumn('folder', 'folder');
            $table->renameColumn('khoa', 'locked');
            $table->renameColumn('ngaykhoa', 'lock_date');
            $table->renameColumn('maphanloaiKH_BV', 'customer_type_id');
            $table->renameColumn('CHUABENH', 'hospitalized');
            $table->renameColumn('Logdate', 'log_date');
            $table->renameColumn('MAKHACHHANG', 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_customer', function (Blueprint $table) {
            $table->renameColumn('customer_group_id', 'MAPHANNHOMKHACHHANG');
            $table->renameColumn('province_id', 'MATINHTHANH');
            $table->renameColumn('full_name', 'TENHO');
            $table->renameColumn('birth_year', 'NAMSINH');
            $table->renameColumn('address', 'DIACHICUTRU');
            $table->renameColumn('identity_card_number', 'SOCMND');
            $table->renameColumn('issue_date', 'NGAYCAPCMND');
            $table->renameColumn('issue_place', 'NOICAP');
            $table->renameColumn('customer_code', 'ID');
            $table->renameColumn('contact_phone', 'DIENTHOAILIENLAC');
            $table->renameColumn('email', 'EMAIL');
            $table->renameColumn('active', 'ACTIVE');
            $table->renameColumn('user_id', 'mauser');
            $table->renameColumn('gender', 'gioitinh');
            $table->renameColumn('images', 'images');
            $table->renameColumn('file_data', 'FileData');
            $table->renameColumn('filename', 'Filename');
            $table->renameColumn('file_size', 'FileSize');
            $table->renameColumn('content_type', 'ContentType');
            $table->renameColumn('folder', 'folder');
            $table->renameColumn('locked', 'khoa');
            $table->renameColumn('lock_date', 'ngaykhoa');
            $table->renameColumn('customer_type_id', 'maphanloaiKH_BV');
            $table->renameColumn('hospitalized', 'CHUABENH');
            $table->renameColumn('log_date', 'Logdate');
            $table->renameColumn('id', 'MAKHACHHANG');
        });

        Schema::rename('tbl_customer', 'TBL_KHACHHANG');
    }
};
