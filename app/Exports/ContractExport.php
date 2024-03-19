<?php

namespace App\Exports;

use App\Models\Contract;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class ContractExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Contract::all();
    }
    public function headings(): array
    {
        return [
            'Số hợp đồng bổ sung',
            'Ngày ký hợp đồng',
            'Thời gian hiệu quả',
            'Thời gian kết thúc',
            'Tổng giá trị hợp đồng',
            'Tổng khách hàng',
            'Phần bổ sung',
            'Số tham chiếu hợp đồng bổ sung',
            'Active',
            'Tên hợp đồng',
            'Tên người dùng',
            'Mở rộng',
            'Mã hợp đồng trước',
            'Kỳ hợp đồng',
            'File hợp đồng',
            'Thư mục',
            'Hợp đồng Gas ',
        ];
    }
}
