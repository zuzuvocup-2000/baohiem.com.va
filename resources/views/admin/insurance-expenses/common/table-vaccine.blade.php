<div class="col-12 mb-4 vaccination-container" style="display: none;">
    <div class="card w-100 position-relative overflow-hidden mb-0">
        <div class="card-body p-4">
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-3">
                    <div class="form-group">
                        <label class="d-inline-block">
                            <h5>Loại chủng ngừa:</h5>
                        </label>
                        <div class="col-sm">
                            <select class="form-select" id="vaccinationClassificationSelectGeneral"
                                name="vaccination_classification">
                                @foreach ($vaccinationClassificationList as $vaccinationClassification)
                                <option value="{{ $vaccinationClassification->id }}">
                                    {{ $vaccinationClassification->classification_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <div class="form-group">
                        <label class="d-inline-block">
                            <h5>Tên chủng ngừa:</h5>
                        </label>
                        <div class="col-sm">
                            <input type="hidden" id="customerId" value="{{ $customer->id }}">
                            <select class="form-select" id="vaccinationSelectGeneral" name="vaccination">
                                @foreach ($vaccinationList as $vaccination)
                                <option value="{{ $vaccination->id }}">
                                    {{ $vaccination->vaccination_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <h5>Tên Vacxin: <span class="font-normal">IMOVAX POLIO</span></h5>
                </div>
            </div>
            <div class="table-responsive">
                <table
                    class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3 table-content-pay">
                    <thead class="text-dark fs-4">
                        <tr role="row">
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0 text-center" style="width: 100px">
                                    Thao
                                    tác
                                </h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold text-center mb-0">STT</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold text-center mb-0">Tên lần tiêm
                                </h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold text-center mb-0">Số tháng cách
                                    lần đầu tiên
                                </h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold text-center mb-0">Số tháng nhắc
                                    lại
                                </h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold text-center mb-0">Ngày tiêm</h6>
                            </th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        @foreach ($vaccinationScheduleList as $key => $vaccinationSchedule)
                        <tr class="vaccination-data" role="row" data-id="{{ $vaccinationSchedule->id }}">
                            <td>
                                <h6 class='fs-4 fw-semibold mb-0'>
                                    <div class='btn-group d-flex justify-content-center '>
                                        <button class='btn btn-success me-1 editButton' type="button">
                                            <span class='icon-item-icon'>
                                                <img src='/img-system/system/edit_white.svg' />
                                            </span>
                                        </button>
                                        <button class='btn btn-danger tabledit-delete-button delete-button-vaccination' type="button">
                                            <span class='icon-item-icon'>
                                                <img src='/img-system/system/trash_white.svg' alt='' />
                                            </span>
                                        </button>
                                        <button class="btn btn-info me-1 saveButton btn-update-vaccination" type="button" style="display: none;">
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
                                        <button class="btn btn-warning cancelButton" type="button" style="display: none;">
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
                            <td class="text-center">
                                {{ ++$key }}
                            </td>
                            <td>
                                <input class="inputField form-control vaccination-injection_name"
                                    type="text" name="update_injection_name" value="{{ $vaccinationSchedule->injection_name }}" disabled/>
                            </td>
                            <td>
                                <input class="inputField form-control vaccination-months_to_first"
                                    type="text" name="update_months_to_first" value="{{ $vaccinationSchedule->months_to_first }}" disabled/>
                            </td>
                            <td>
                                <input class="inputField form-control vaccination-months_to_repeat" type="text" name="update_months_to_repeat" value="{{ $vaccinationSchedule->months_to_repeat }}" disabled/>
                            </td>
                            <td>
                                <input class="inputField form-control vaccination-injection_date singledate" type="text" name="update_injection_date" value="{{ $vaccinationSchedule->injection_date }}" disabled/>
                            </td>
                        </tr>
                        @endforeach
                        <tr role="row">
                            <td>
                                @include('common/button-loading', ['class' =>
                                'btn-create-vaccination'])
                            </td>
                            <td>
                            </td>
                            <td>
                                <input class="inputField form-control create-vaccination-injection_name"
                                    type="text" name="create-injection_name" value="" />
                            </td>
                            <td>
                                <input class="inputField form-control create-vaccination-months_to_first"
                                    type="text" name="create-months_to_first" value="" />
                            </td>
                            <td>
                                <input class="inputField form-control create-vaccination-months_to_repeat" type="text" name="create-months_to_repeat" value="" />
                            </td>
                            <td>
                                <input class="inputField form-control create-vaccination-injection_date singledate" type="text" name="create-injection_date" value="" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>