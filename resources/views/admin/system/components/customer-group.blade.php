<div class="table-responsive">
    <table id="simpletable" class="table system-table border text-nowrap customize-table mb-0 align-middle mb-3">
        <thead class="text-dark fs-4">
            <tr role="row">
                <th>
                    <input type="checkbox" class="toggleAll custom-control-input" id="customCheck1" />
                </th>
                <th>
                    <h6 class="fs-4 fw-semibold mb-0 text-center">STT</h6>
                </th>
                <th>
                    <h6 class="fs-4 fw-semibold mb-0">Tên nhóm khách hàng
                    </h6>
                </th>
                <th>
                    <h6 class="fs-4 fw-semibold mb-0">Thao tác</h6>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customerGroupList as $key => $customerGroup)
                <tr role="row" data-id="{{ $customerGroup->id }}">
                    <td>
                        <input type="checkbox" class="toggleCheckbox custom-control-input"
                            id="customerGroup-{{ $customerGroup->id }}" name="id[]"
                            value="{{ $customerGroup->id }}" />
                    </td>
                    <td>
                        <p class="mb-0 fw-normal fs-4 text-center">{{ ++$key }}</p>
                    </td>
                    <td>
                        <input class="inputField form-control update-customer-group-group_name" type="text"
                            name="group_name" value="{{ $customerGroup->group_name }}"
                            data-original-value="{{ $customerGroup->group_name }}" style="width: 100%;"
                            disabled="" />
                    </td>
                    <td style="width: 150px;">
                        <h6 class="fs-4 fw-semibold mb-0">
                            <div class="btn-group d-flex">
                                <button class="btn btn-success me-1 editButton">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('/img-system/system/edit_white.svg') }}" />
                                    </span>
                                </button>
                                <button class="btn btn-danger tabledit-delete-button delete-button-customer-group">
                                    <span class="icon-item-icon">
                                        <img src="{{ asset('/img-system/system/trash_white.svg') }}" alt="" />
                                    </span>
                                </button>
                                <button class="btn btn-info me-1 saveButton btn-update-customer-group"
                                    style="display: none;">
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
                </tr>
            @endforeach
            <tr role="row">
                <td>
                    <p class="mb-0 fw-normal fs-4 text-center"></p>
                </td>
                <td>
                    @include('common/button-loading', ['class' => 'btn-create-customer-group'])
                </td>
                <td>
                    <input class="inputField form-control create-customer-group-group_name" type="text"
                        name="company" value="" data-original-value="" style="width: 100%;" />
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
