<div class="row mb-3">
    <div class="col-xs-12 col-md-6">
        <div class="form-group">
            <label class="mr-sm-2" for="companySelect">Tên công ty</label>
            <select class="form-select mr-sm-2" id="companySelectAccountPackage" name="companySelect">
                @foreach ($companyAll as $company)
                    <option value="{{ $company->id }}"
                        {{ isset($_GET['account_package_company_id']) && $_GET['account_package_company_id'] == $company->id ? 'selected' : '' }}>
                        {{ $company->company_name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="form-group">
            <label class="mr-sm-2" for="periodSelect">Niên hạn</label>
            <select class="form-select mr-sm-2" id="periodSelectAccountPackage" name="periodSelect">
                @foreach ($periodList as $period)
                    <option value="{{ $period->id }}"
                        {{ isset($_GET['account_package_period_id']) && $_GET['account_package_period_id'] == $period->id ? 'selected' : '' }}>
                        {{ $period->period_name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table id="simpletable" class="sticky-column table system-table border text-nowrap customize-table mb-0 align-middle mb-3">
        <thead class="text-dark fs-4">
            <tr role="row">
                <th>
                    <h6 class="fs-4 fw-semibold mb-0 text-center">Thao tác</h6>
                </th>
                <th>
                    <h6 class="fs-4 fw-semibold mb-0">Tên gói bảo hiểm</h6>
                </th>
                <th>
                    <h6 class="fs-4 fw-semibold mb-0">Giá trị gói</h6>
                </th>
                <th>
                    <h6 class="fs-4 fw-semibold mb-0">Ghi chú</h6>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($accountPackageList as $key => $accountPackage)
                <tr role="row" data-id="{{ $accountPackage->id }}">
                    <td>
                        <h6 class="fs-4 fw-semibold mb-0">
                            <div class="btn-group d-flex justify-content-center">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('/img-system/system/edit_white.svg') }}" />
                                    </span>
                                </button>
                                <button class="btn btn-danger tabledit-delete-button delete-button-account-package">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('/img-system/system/trash_white.svg') }}" alt="" />
                                    </span>
                                </button>
                                <button class="btn btn-info me-1 saveButton btn-update-account-package" style="display: none;">
                                    <span class="icon-item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-discount-check-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </button>
                                <button class="btn btn-warning cancelButton" style="display: none;">
                                    <span class="icon-item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-circle-x-filled" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.489 5.8a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z"
                                                stroke-width="0" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </h6>
                    </td>
                    <td>
                        <input class="inputField form-control update-account-package-package_name" type="text" name="package_name"
                            value="{{ $accountPackage->package_name }}"
                            data-original-value="{{ $accountPackage->package_name }}" disabled="" />
                    </td>
                    <td>
                        <input class="inputField form-control int update-account-package-package_price" type="text" name="package_price"
                            value="{{ $accountPackage->package_price }}"
                            data-original-value="{{ $accountPackage->package_price }}" disabled="" />
                    </td>
                    <td>
                        <input class="inputField form-control update-account-package-note" type="text" name="note"
                            value="{{ $accountPackage->note }}"
                            data-original-value="{{ $accountPackage->note }}" disabled="" />
                    </td>
                </tr>
            @endforeach
            <tr role="row">
           
                <td>
                    @include('common/button-loading', ['class' => 'btn-create-account-package'])
                </td>
                <td>
                    <input class="inputField form-control create-account-package-package_name" type="text" name="package_name" value=""
                        data-original-value="" />
                </td>
                <td>
                    <input class="inputField form-control create-account-package-package_price int" type="text" name="package_price" value=""
                        data-original-value="" />
                </td>
                <td>
                    <input class="inputField form-control create-account-package-note" type="text" name="note" value=""
                        data-original-value="" />
                </td>
            </tr>
        </tbody>
    </table>
</div>
