<table id="simpletable" class="table sticky-column system-table border text-nowrap customize-table mb-0 align-middle mb-3">
    <thead class="text-dark fs-4">
        <tr role="row">
            <th>
                <h6 class="fs-4 fw-semibold mb-0 text-center">Thao tác</h6>
            </th>
            <th>
                <h6 class="fs-4 fw-semibold mb-0">Tên niên hạn</h6>
            </th>
            <th>
                <h6 class="fs-4 fw-semibold mb-0">Từ năm</h6>
            </th>
            <th>
                <h6 class="fs-4 fw-semibold mb-0">Đến năm</h6>
            </th>
            <th>
                <h6 class="fs-4 fw-semibold mb-0 text-center">Thứ tự</h6>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($periodList as $key => $period)
            <tr role="row" data-id="{{ $period->id }}">
                <td>
                    <h6 class="fs-4 fw-semibold mb-0">
                        <div class="btn-group d-flex justify-content-center">
                            <button class="btn btn-success me-1 editButton">
                                <span class="icon-item-icon">
                                    <img src="{{ asset('/img-system/system/edit_white.svg') }}" />
                                </span>
                            </button>
                            <button class="btn btn-danger tabledit-delete-button delete-button-period">
                                <span class="icon-item-icon">
                                    <img src="{{ asset('/img-system/system/trash_white.svg') }}" alt="" />
                                </span>
                            </button>
                            <button class="btn btn-info me-1 saveButton btn-update-period" style="display: none;">
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
                    <input class="inputField form-control" type="text" name="period_name"
                        value="{{ $period->period_name }}" data-original-value="{{ $period->period_name }}"
                        disabled="" />
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="inputField form-control mydatepicker"
                            value="{{ $period->from_year }}" name="from_year" disabled="" />
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="inputField form-control mydatepicker"
                            value="{{ $period->to_year }}" name="to_year" disabled="" />
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" class="inputField form-control" value="{{ $period->order }}"
                            name="order" disabled="" />
                    </div>
                </td>
          
            </tr>
        @endforeach
        <tr role="row">
            <td>
                @include('common/button-loading', ['class' => 'btn-create-period'])
            </td>
            <td>
                <input class="inputField form-control create-period-period_name" type="text" name="period_name"
                    value="" data-original-value="" />
            </td>
            <td>
                <div class="input-group">
                    <input type="text" class="inputField form-control mydatepicker create-period-from_year"
                        name="from_year" />
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input type="text" class="inputField form-control mydatepicker create-period-to_year"
                        name="to_year" />
                </div>
            </td>
            <td>
                <input type="text" class="inputField form-control create-period-order" value=""
                    name="order" />
            </td>
        </tr>
    </tbody>
</table>
