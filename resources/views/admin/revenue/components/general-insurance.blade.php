<form action="">
    <div class="form-check form-check-inline mb-2">
        <input class="form-check-input success" type="checkbox" id="success2-check" value="option1" checked="">
        <label class="form-check-label" for="success2-check">Toàn bộ theo niên hạn</label>
    </div>
    <div class="row mb-2">
        <div class="col-11">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-xl-3">
                    @include('common/select-company', [
                        'companyId' => isset($_GET['company']) ? $_GET['company'] : 0,
                        'companyList' => $companyList,
                    ])
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3">
                    @include('common/select-period', [
                        'periodId' => isset($_GET['period']) ? $_GET['period'] : 0,
                        'periodList' => $periodList,
                    ])
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3">
                    @include('common/select-contract', [
                        'contractId' => isset($_GET['contract']) ? $_GET['contract'] : 0,
                        'contractList' => $contractList,
                    ])
                </div>
                <div class="col-sm-12 col-md-6 col-xl-3">
                    <div class="form-field">
                        <label for="" class="mb-1">Thời gian hiệu lực từ:</label>
                        <div class="input-group">
                            <input type="text" class="form-control daterange" id="dateInput" name="time_range" value="{{ isset($_GET['time_range']) ? $_GET['time_range'] : date('01/01/Y') . ' - ' . date('d/m/Y') }}">
                            <span class="input-group-text">
                                <i class="ti ti-calendar fs-5"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1 d-flex flex-column-reverse">
            <button class="btn btn-primary w-100" type="submit">Tìm kiếm</button>
        </div>
    </div>

</form>
<div class="row">
    <div class="col-md-12 col-xl-6">
        <div class="table-responsive">
            <table class="table search-table align-middle text-nowrap price-table">
                <tbody>
                    <tr>
                        <th class="main-th">Tổng số tài khoản chủ:</th>
                        <td class="main-color">5</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="extra-th">
                            <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                </svg></span>
                            Tài khoản chủ hoạt động:
                        </th>
                        <td class="main-color">5</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="extra-th">
                            <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                </svg></span>
                            Tài khoản chủ bị khóa:
                        </th>
                        <td class="main-color">0</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="main-th">TS tài khoản thành viên gia đình:</th>
                        <td class="main-color">8</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="extra-th">
                            <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                </svg></span>
                            Thành viên gia đình hoạt động:
                        </th>
                        <td class="main-color">7</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="extra-th">
                            <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                </svg></span>
                            Thành viên gia đình bị khóa:
                        </th>
                        <td class="main-color">1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="extra-th">
                            <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                </svg></span>
                            Tổng giá trị giới hạn niên hạn trước chuyển sang:
                        </th>
                        <td class="main-color">0</td>
                        <td>đồng</td>
                    </tr>
                    <tr>
                        <th class="extra-th">
                            <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-corner-down-right" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                </svg></span>
                            Tổng giá trị gói TK(plan):
                        </th>
                        <td class="main-color">53 628 080</td>
                        <td>đồng</td>
                    </tr>
                    <tr>
                        <th class="extra-th">
                            <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-corner-down-right" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                </svg></span>
                            Tổng giá trị giới hạn đầu kỳ:
                        </th>
                        <td class="main-color">53 628 080</td>
                        <td>đồng</td>
                    </tr>
                    <tr>
                        <th class="extra-th">
                            <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-corner-down-right" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                </svg></span>
                            Tổng số lượt chi bảo hiểm:
                        </th>
                        <td class="main-color">3 170 000</td>
                        <td>đồng</td>
                    </tr>
                    <tr>
                        <th class="extra-th">
                            <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-corner-down-right" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                </svg></span>
                            Tổng giá trị chi bảo hiểm:
                        </th>
                        <td class="main-color">1</td>
                        <td>đồng</td>
                    </tr>
                    <tr>
                        <th class="main-th">Tổng tài khoản chi bảo hiểm:</th>
                        <td class="main-color">1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="extra-th">
                            <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-corner-down-right" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                </svg></span>
                            Tài khoản chủ:
                        </th>
                        <td class="main-color">0</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="extra-th">
                            <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-corner-down-right" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                </svg></span>
                            Tài khoản thành viên:
                        </th>
                        <td class="main-color">0</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="extra-th">
                            <span class="icon-item-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-corner-down-right" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                </svg></span>
                            Tổng giá trị giới hạn còn lại đến thời điểm hiện tại:
                        </th>
                        <td class="main-color">50 458 080</td>
                        <td>đồng</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-12 col-xl-6">
        <div class="system-table table-responsive">
            <table id="simpletable" class="table border text-nowrap customize-table mb-0 align-middle mb-3">
                <thead>
                    <tr>
                        <th class="text-center">STT</th>
                        <th>Tên bệnh viện</th>
                        <th class="text-center">Số tiền bảo hiểm chi</th>
                        <th class="text-center">Số lần chi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Bệnh viện Hồng Ngọc</td>
                        <td class="text-center">3 170 000</td>
                        <td class="text-center">1</td>
                    </tr>
                </tbody>
            </table>
            <h4 class="text-center">Tổng số tiền chi: 3 170 000 <span class="vnd">đồng</span></h4>
        </div>
    </div>
</div>
<div class="btn-export text-center"><button class="btn btn-primary" type="button">Xuất báo cáo</button></div>
