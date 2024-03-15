<div class="row mb-3">
    <div class="col-xs-12 col-md-6">
        <div class="form-group">
            <label class="mr-sm-2" for="companySelectContract">Tên công ty</label>
            <select class="form-select contract-company-search mr-sm-2" id="companySelectContract" name="contract_company_id">
                @foreach ($companyAll as $company)
                    <option value="{{ $company->id }}"
                        {{ isset($_GET['contract_company_id']) && $_GET['contract_company_id'] == $company->id ? 'selected' : '' }}>
                        {{ $company->company_name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="form-group">
            <label class="mr-sm-2" for="periodSelectContract">Niên hạn</label>
            <select class="form-select contract-period-search mr-sm-2" id="periodSelectContract" name="contract_period_id">
                @foreach ($periodList as $period)
                    <option value="{{ $period->id_new }}"
                        {{ isset($_GET['contract_period_id']) && $_GET['contract_period_id'] == $period->id_new ? 'selected' : '' }}>
                        {{ $period->period_name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table id="simpletable" class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3">
        <thead class="text-dark fs-4">
            <tr role="row">
                <th>
                    <input type="checkbox" class="toggleAll custom-control-input" />
                </th>
                <th>
                    <h6 class="fs-4 fw-semibold mb-0 text-center">STT</h6>
                </th>
                <th>
                    <h6 class="fs-4 fw-semibold mb-0">Tên hợp đồng</h6>
                </th>
                <th>
                    <h6 class="fs-4 fw-semibold mb-0">Số hợp đồng/phụ lục
                    </h6>
                </th>
                <th>
                    <h6 class="fs-4 fw-semibold mb-0">Ngày ký</h6>
                </th>
                <th>
                    <h6 class="fs-4 fw-semibold mb-0">Thời gian hiệu lực
                    </h6>
                </th>
                <th>
                    <h6 class="fs-4 fw-semibold mb-0">Thời gian kết thúc
                    </h6>
                </th>
                <th>
                    <h6 class="fs-4 fw-semibold mb-0 text-center">Gia hạn
                    </h6>
                </th>
                <th>
                    <h6 class="fs-4 fw-semibold mb-0">Tổng giá trị hợp đồng
                    </h6>
                </th>
                <th>
                    <h6 class="fs-4 fw-semibold mb-0">Thao tác</h6>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contractList as $key => $contract)
                <tr role="row" data-id="{{ $contract->id }}">
                    <td>
                        <input type="checkbox" class="toggleCheckbox custom-control-input"
                            id="contract-{{ $contract->id }}" name="id[]" value="{{ $contract->id }}" />
                    </td>
                    <td>
                        <p class="mb-0 fw-normal fs-4 text-center">{{ ++$key }}</p>
                    </td>
                    <td>
                        <input class="inputField form-control" type="text" name="contract_name"
                            value="{{ $contract->contract_name }}"
                            data-original-value="{{ $contract->contract_name }}" disabled="" />
                    </td>
                    <td>
                        <input class="inputField form-control" type="text" name="contract_supplement_number"
                            value="{{ $contract->contract_supplement_number }}"
                            data-original-value="{{ $contract->contract_supplement_number }}" disabled="" />
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="text" class="inputField form-control singledate"
                                value="{{ date('d/m/Y', strtotime($contract->signature_date)) }}" disabled="" name="signature_date" />
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="text" class="inputField form-control singledate"
                                value="{{ date('d/m/Y', strtotime($contract->effective_time)) }}" disabled="" name="effective_time" />
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="text" class="inputField form-control singledate"
                                value="{{ date('d/m/Y', strtotime($contract->end_time)) }}" name="end_time" disabled="" />
                        </div>
                    </td>
                    <td class="text-center">
                        <input type="checkbox" class="inputField custom-control-input" disabled="" name="extension"/>
                    </td>
                    <td>
                        <input class="inputField form-control int" type="text" name="total_contract_value"
                            value="{{ $contract->total_contract_value }}"
                            data-original-value="{{ $contract->total_contract_value }}" disabled="" />
                    </td>
                    <td>
                        <h6 class="fs-4 fw-semibold mb-0">
                            <div class="btn-group d-flex">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('/img-system/system/edit_white.svg') }}" />
                                    </span>
                                </button>
                                <button class="btn btn-danger tabledit-delete-button" data-id="24">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('/img-system/system/trash_white.svg') }}" alt="" />
                                    </span>
                                </button>
                                <button class="btn btn-info me-1 saveButton" style="display: none;">
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
                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
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
                </tr>
            @endforeach
            <tr role="row">
                <td>
                    <p class="mb-0 fw-normal fs-4 text-center"></p>
                </td>
                <td>
                    @include('common/button-loading', ['class' => 'btn-create-contract'])
                </td>
                <td>
                    <input class="inputField form-control create-contract-contract_name" type="text" name="contract_name" value=""/>
                </td>
                <td>
                    <input class="inputField form-control create-contract-contract_supplement_number" type="text" name="contract_supplement_number" value=""/>
                </td>
                <td>
                    <input class="inputField form-control create-contract-signature_date singledate" type="text" name="signature_date" value=""/>
                </td>
                <td>
                    <input class="inputField form-control create-contract-effective_time singledate" type="text" name="effective_time" value=""/>
                </td>
                <td>
                    <input class="inputField form-control create-contract-end_time singledate" type="text" name="end_time" value=""/>
                </td>
                <td class="text-center">
                    <input type="checkbox" class="inputField custom-control-input create-contract-extension" name="extension"/>
                </td>
                <td class="text-center">
                    <input class="inputField form-control create-contract-total_contract_value int" type="text" name="total_contract_value" value=""/>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
