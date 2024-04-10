<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

/**
 * Class InsuranceExpensesService
 * @package App\Services
 */
class InsuranceExpensesService
{

    // KhachhangChiBH_Insert
    // Chibaohiem_insert
    public function InsuranceExpensesInsert()
    {
        try {
            DB::beginTransaction();

            // Retrieve MAX(machitiettaikhoan) and MAX(mataikhoan)
            $Machitiettaikhoan = DB::table('tbl_chitiettaikhoan')->where('active', 1)->where('makhachhang', $makhachhang)->max('machitiettaikhoan');

            $Mataikhoan = DB::table('tbl_chitiettaikhoan')->where('active', 1)->where('MACHITIETTAIKHOAN', $Machitiettaikhoan)->max('mataikhoan');

            // Retrieve mabenhvien
            $MABENHVIEN = DB::table('tbl_benhvien')
                ->where('tenbenhvien', 'LIKE', '%' . trim($tenbenhvien) . '%')
                ->where('active', 1)
                ->value('mabenhvien');

            if (!$MABENHVIEN) {
                $MABENHVIEN = DB::table('tbl_benhvien')->insertGetId([
                    'TENBENHVIEN' => $tenbenhvien,
                ]);
            }

            // Retrieve ngayketthuc
            $ngayketthuc = DB::table('TBL_HOPDONGCTY')->join('TBL_CHITIETNIENHAN', 'TBL_HOPDONGCTY.machitietnienhan', '=', 'TBL_CHITIETNIENHAN.machitietnienhan')->join('TBL_CHITIET_GOI', 'TBL_CHITIETNIENHAN.manienhan', '=', 'TBL_CHITIET_GOI.manienhan')->join('chitiettaikhoan_chitiet', 'TBL_CHITIET_GOI.machitietgoi', '=', 'chitiettaikhoan_chitiet.machitietgoi')->where('chitiettaikhoan_chitiet.mataikhoan', $Mataikhoan)->where('TBL_CHITIETNIENHAN.manienhan', $manienhan)->where('mahopdong', $mahopdong)->value('TBL_HOPDONGCTY.THOIGIANKETTHUC');

            if (strtotime($ngaychi) <= strtotime($ngayketthuc)) {
                $chitiet = self::create([
                    'MAUSER' => $mauser,
                    'MACHITIETTAIKHOAN' => $Machitiettaikhoan,
                    'MABENHVIEN' => $MABENHVIEN,
                    'SOTIENCHITRA' => $sotienchitra,
                    'NGAYCHI' => $ngaychi,
                    'GHICHU' => $ghichu,
                    'NGAYKHAM' => $ngaykham,
                    'DADUYET' => $daduyet,
                    'maloaichi' => $maloaichi,
                    'uocchi' => $uocchi,
                    'sotienbituchoi' => $sotienbituchoi,
                    'MAKQCHUNGNGUA' => $MAKQCHUNGNGUA,
                    'mauser' => $mauser,
                    'localIP' => $localIP,
                    'Computername' => $Computername,
                    'mahopdong' => $mahopdong,
                ]);

                DB::commit();

                return [
                    'ChitraBHOK' => 1,
                    'chitra' => 1,
                ];
            } else {
                DB::rollBack();

                return [
                    'ChitraBHOK' => 0,
                    'chitra' => 0,
                ];
            }
        } catch (\Exception $e) {
            DB::rollBack();

            return [
                'ChitraBHOK' => 0,
                'chitra' => 1,
            ];
        }
    }
}
