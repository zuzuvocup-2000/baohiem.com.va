<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Carbon\Carbon;
use NumberFormatter;

class ContractExtensionExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        $modifiedData = collect();
        $index = 1;
        $numberFormatter = new NumberFormatter('vi-VN', NumberFormatter::DECIMAL);
    foreach ($this->data as $item) {
        $itemArray = $item->toArray();
        $itemArray['birth_year'] = isset($itemArray['birth_year']) ? Carbon::parse($itemArray['birth_year'])->format('d/m/Y') : '';
        $itemArray['effective_time'] = isset($itemArray['effective_time']) ? Carbon::parse($itemArray['effective_time'])->format('d/m/Y') : '';
        $itemArray['end_time'] = isset($itemArray['end_time']) ? Carbon::parse($itemArray['end_time'])->format('d/m/Y') : '';
        $itemArray['advance_payment'] = isset($itemArray['advance_payment']) ? $numberFormatter->formatCurrency($itemArray['advance_payment'], 'VND') : '';
        $itemArray['prepayment'] = isset($itemArray['prepayment']) ? $numberFormatter->formatCurrency($itemArray['prepayment'], 'VND') : '';
        $itemArray['package_price'] = isset($itemArray['package_price']) ? $numberFormatter->formatCurrency($itemArray['package_price'], 'VND') : '';
        $itemArray = Arr::prepend($itemArray, $index, 'STT');
        $modifiedData->push($itemArray);
        $index++;
    }
    return $modifiedData;
    }

    public function headings(): array
    {
        return [
            ['GIA HẠN KSK'],
            ['STT', 'Tên gói BH', 'Staffcode', 'Số thẻ', 'Họ tên', 'Plan', 'Từ ngày', 'Đến ngày', 'Giá trị gói'],
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->mergeCells('A1:I1');
        $sheet->getStyle('A1:I1')->applyFromArray([
            'font' => [
                'bold' => true,
                'size' => 20,
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => '92D050', 
                ],
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
        ]);
        $sheet->getStyle($sheet->calculateWorksheetDimension())
        ->getAlignment()
        ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
    }
}