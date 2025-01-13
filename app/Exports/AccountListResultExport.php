<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\IOFactory;

class AccountListResultExport implements FromCollection, ShouldAutoSize
{
    protected $data;
    protected $timeRange;

    public function __construct($data, $timeRange)
    {
        $this->data = $data;
        $this->timeRange = $timeRange;
    }

    public function collection()
    {
        return $this->data;
    }

    public function exportAccountListResult()
    {
        $filePath = storage_path('app/templates/danh sach khach hang 2024.xlsx');
        $spreadsheet = IOFactory::load($filePath);
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A3', "Từ ngày: " . explode(' - ', $this->timeRange)[0] . " Đến ngày: " . explode(' - ', $this->timeRange)[1]);
        $index = 6;
        $stt = 1;
        foreach ($this->data as $item) {
            $sheet->setCellValue('A' . $index, $stt);
            $sheet->setCellValue('B' . $index, $item->card_number);
            $sheet->setCellValue('C' . $index, $item->old_card_number);
            $sheet->setCellValue('D' . $index, $item->full_name);
            $sheet->setCellValue('E' . $index, $item->data['moneyStartPeriod'] ?? '');
            $sheet->setCellValue('F' . $index, $item->data['totalAmountSpent'] ?? '');
            $sheet->setCellValue('G' . $index, $item->data['theRemainingAmount'] ?? '');
            $index++;
            $stt++;
        }

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $exportPath = storage_path('app/exports/danh sach khach hang ' . date('Y') . '.xlsx');
        $writer->save($exportPath);
        return $exportPath;
    }
}
