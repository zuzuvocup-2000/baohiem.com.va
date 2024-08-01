<?php

namespace App\Http\Controllers\Admin;

use App\Models\Position;
use App\Services\PositionService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    protected $positionService;

    public function __construct(
        PositionService $positionService,
    ) {
        $this->positionService = $positionService;
    }

    public function index()
    {
        $positionList = $this->positionService->getActivePositions();
        return view('admin.position.index' , compact(['positionList']));
    }

    public function store(Request $request)
    {
        $position = new Position();
        $position->name = $request->name;
        $position->active = STATUS_ACTIVE;
        $position->save();

        return response()->json(['success' => true, 'message' => 'Đã thêm vị trí chức vụ thành công.']);
    }

    public function update(Request $request, $id)
    {
        $position = Position::find($id);
        if (!$position) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy vị trí chức vụ.']);
        }
        $position->name = $request->name;
        $position->save();

        return response()->json(['success' => true, 'message' => 'vị trí chức vụ được cập nhật thành công.']);
    }

    public function destroy($id)
    {
        $position = Position::find($id);

        if (!$position) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy vị trí chức vụ.']);
        }

        $position->update(['active' => STATUS_INACTIVE]);
        return response()->json(['success' => true, 'message' => 'Đã xóa vị trí chức vụ thành công.']);
    }
}
