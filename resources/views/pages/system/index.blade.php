@extends('layouts.master')

@section('title', 'Cập nhật thông tin')

@section('content')
    @include('partial.breadcrumb', ['breadcrumbTitle' => 'Cập nhật thông tin'])
    <div class="system font-weight-medium shadow-none position-relative overflow-hidden mb-4">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <ul class="mb-3 nav nav-pills user-profile-tab mt-2 bg-primary-subtle rounded-2 rounded-top-0" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">
                    <span class="icon-item-icon me-2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-time-duration-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 12v.01"></path>
                        <path d="M21 12v.01"></path>
                        <path d="M12 21v.01"></path>
                        <path d="M12 3v.01"></path>
                        <path d="M7.5 4.2v.01"></path>
                        <path d="M16.5 4.2v.01"></path>
                        <path d="M16.5 19.8v.01"></path>
                        <path d="M7.5 19.8v.01"></path>
                        <path d="M4.2 16.5v.01"></path>
                        <path d="M19.8 16.5v.01"></path>
                        <path d="M19.8 7.5v.01"></path>
                        <path d="M4.2 7.5v.01"></path>
                        <path d="M10 11v2a2 2 0 1 0 4 0v-2a2 2 0 1 0 -4 0z"></path>
                      </svg>
                    </span>
                    <span class="d-none d-md-block">Công ty - Niên hạn - Gói bảo hiểm (plan)</span>
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-followers-tab" data-bs-toggle="pill" data-bs-target="#pills-followers" type="button" role="tab" aria-controls="pills-followers" aria-selected="false" tabindex="-1">
                    <span class="icon-item-icon me-2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-description" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                        <path d="M9 17h6"></path>
                        <path d="M9 13h6"></path>
                      </svg>
                    </span>
                    <span class="d-none d-md-block">Cập nhật hợp đồng - Phân loại khách hàng</span>
                  </button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                  <div class="mb-3">
                    <h5 class="mb-0">Cập nhật thông tin hệ thống</h5>
                  </div>
                  <div class="row mt-3">
                    <div class="col-md-2">
                      <!-- Nav tabs -->
                      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-client-tab" data-bs-toggle="pill" href="#v-pills-client" role="tab" aria-controls="v-pills-client" aria-selected="true"> Công ty Khách hàng </a>
                        <a class="nav-link" id="v-pills-duration-tab" data-bs-toggle="pill" href="#v-pills-duration" role="tab" aria-controls="v-pills-duration" aria-selected="false" tabindex="-1"> Niên hạn </a>
                        <a class="nav-link" id="v-pills-insurance-tab" data-bs-toggle="pill" href="#v-pills-insurance" role="tab" aria-controls="v-pills-insurance" aria-selected="false" tabindex="-1"> Gói bảo hiểm </a>
                        <a class="nav-link" id="v-pills-hospital-tab" data-bs-toggle="pill" href="#v-pills-hospital" role="tab" aria-controls="v-pills-hospital" aria-selected="false" tabindex="-1"> Phân nhóm khách hàng theo bệnh viện </a>
                      </div>
                    </div>
                    <div class="col-md-10">
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade active show" id="v-pills-client" role="tabpanel" aria-labelledby="v-pills-client-tab">
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
                                    <h6 class="fs-4 fw-semibold mb-0">Tên công ty</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Địa chỉ</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Số điện thoại</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Email</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Tên giám đốc</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Người liên hệ</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Thao tác</h6>
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr role="row" data-id="24">
                                  <td>
                                    <input type="checkbox" class="toggleCheckbox custom-control-input" id="" name="" value="" />
                                  </td>
                                  <td>
                                    <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="company" value="PVFCCO" data-original-value="PVFCCO" disabled="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="address" value="Hoàn Kiếm, Hà Nội" data-original-value="Hoàn Kiếm, Hà Nội" disabled="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="phone" value="0961187500" data-original-value="0961187500" disabled="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="ceo" value="minhbrots2@gmail.com" data-original-value="minhbrots2@gmail.com" disabled="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="ceo" value="Hoàng Lê Minh" data-original-value="Hoàng Lê Minh" disabled="" />
                                  </td>
                                  <td class="text-center">
                                    <input class="inputField form-control" type="text" name="contactuser" value="Hoàng Lê Minh" data-original-value="Hoàng Lê Minh" disabled="" />
                                  </td>
                                  <td>
                                    <h6 class="fs-4 fw-semibold mb-0">
                                      <div class="btn-group d-flex">
                                        <button class="btn btn-success me-1 editButton">
                                          <span class="icon-item-icon">
                                            <img src="http://baohiem.com.va/img-system/system/edit_white.svg" />
                                          </span>
                                        </button>
                                        <button class="btn btn-danger tabledit-delete-button" data-id="24">
                                          <span class="icon-item-icon">
                                            <img src="http://baohiem.com.va/img-system/system/trash_white.svg" alt="" />
                                          </span>
                                        </button>
                                        <button class="btn btn-info me-1 saveButton" style="display: none;">
                                          <span class="icon-item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-check-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                              <path d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                        </button>
                                        <button class="btn btn-warning cancelButton" style="display: none;">
                                          <span class="icon-item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                              <path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.489 5.8a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z" stroke-width="0" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                        </button>
                                      </div>
                                    </h6>
                                  </td>
                                </tr>
                                <tr role="row">
                                  <td>
                                    <p class="mb-0 fw-normal fs-4 text-center"></p>
                                  </td>
                                  <td>
                                    <div class="btn-group d-flex">
                                      <button class="btn btn-info me-1 saveButton">
                                        <span class="icon-item-icon">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-check-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path>
                                          </svg>
                                        </span>
                                      </button>
                                    </div>
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="company" value="" data-original-value="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="address" value="" data-original-value="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="phone" value="" data-original-value="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="ceo" value="" data-original-value="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="ceo" value="" data-original-value="" />
                                  </td>
                                  <td class="text-center">
                                    <input class="inputField form-control" type="text" name="contactuser" value="" data-original-value="" />
                                  </td>
                                  <td></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-duration" role="tabpanel" aria-labelledby="v-pills-duration-tab">
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
                                    <h6 class="fs-4 fw-semibold mb-0">Tên niên hạn</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Từ năm</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Đến năm</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Thao tác</h6>
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr role="row" data-id="24">
                                  <td>
                                    <input type="checkbox" class="toggleCheckbox custom-control-input" id="" name="" value="" />
                                  </td>
                                  <td>
                                    <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="company" value="PVFCCO" data-original-value="PVFCCO" disabled="" />
                                  </td>
                                  <td>
                                    <div class="input-group">
                                      <input type="text" class="inputField form-control pickadate-select-year" value="2024" disabled="" />
                                    </div>
                                  </td>
                                  <td>
                                    <div class="input-group">
                                      <input type="text" class="inputField form-control pickadate-select-year" value="2025" disabled="" />
                                    </div>
                                  </td>
                                  <td>
                                    <h6 class="fs-4 fw-semibold mb-0">
                                      <div class="btn-group d-flex">
                                        <button class="btn btn-success me-1 editButton">
                                          <span class="icon-item-icon">
                                            <img src="http://baohiem.com.va/img-system/system/edit_white.svg" />
                                          </span>
                                        </button>
                                        <button class="btn btn-danger tabledit-delete-button" data-id="24">
                                          <span class="icon-item-icon">
                                            <img src="http://baohiem.com.va/img-system/system/trash_white.svg" alt="" />
                                          </span>
                                        </button>
                                        <button class="btn btn-info me-1 saveButton" style="display: none;">
                                          <span class="icon-item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-check-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                              <path d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                        </button>
                                        <button class="btn btn-warning cancelButton" style="display: none;">
                                          <span class="icon-item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                              <path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.489 5.8a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z" stroke-width="0" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                        </button>
                                      </div>
                                    </h6>
                                  </td>
                                </tr>
                                <tr role="row">
                                  <td>
                                    <p class="mb-0 fw-normal fs-4 text-center"></p>
                                  </td>
                                  <td>
                                    <div class="btn-group d-flex">
                                      <button class="btn btn-info me-1 saveButton">
                                        <span class="icon-item-icon">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-check-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path>
                                          </svg>
                                        </span>
                                      </button>
                                    </div>
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="company" value="" data-original-value="" />
                                  </td>
                                  <td>
                                    <div class="input-group">
                                      <input type="text" class="inputField form-control pickadate-select-year" />
                                    </div>
                                  </td>
                                  <td>
                                    <div class="input-group">
                                      <input type="text" class="inputField form-control pickadate-select-year" />
                                    </div>
                                  </td>
                                  <td></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-insurance" role="tabpanel" aria-labelledby="v-pills-insurance-tab">
                          <div class="row mb-3">
                            <div class="col-xs-12 col-md-6">
                              <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Tên công ty</label>
                                <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                  <option value="1">Trường Sơn JOC</option>
                                  <option value="2">PVFCCO</option>
                                  <option value="3">Cửu Long JOC</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                              <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Niên hạn</label>
                                <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                  <option value="1">CL2023</option>
                                  <option value="2">CL2024</option>
                                  <option value="3">CL2025</option>
                                </select>
                              </div>
                            </div>
                          </div>
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
                                    <h6 class="fs-4 fw-semibold mb-0">Tên gói bảo hiểm</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Giá trị gói</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Ghi chú</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Thao tác</h6>
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr role="row" data-id="24">
                                  <td>
                                    <input type="checkbox" class="toggleCheckbox custom-control-input" id="" name="" value="" />
                                  </td>
                                  <td>
                                    <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="insurance_name" value="PVFCCO" data-original-value="PVFCCO" disabled="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="value" value="0" data-original-value="0" disabled="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="note" value="" data-original-value="" disabled="" />
                                  </td>
                                  <td>
                                    <h6 class="fs-4 fw-semibold mb-0">
                                      <div class="btn-group d-flex">
                                        <button class="btn btn-success me-1 editButton">
                                          <span class="icon-item-icon">
                                            <img src="http://baohiem.com.va/img-system/system/edit_white.svg" />
                                          </span>
                                        </button>
                                        <button class="btn btn-danger tabledit-delete-button" data-id="24">
                                          <span class="icon-item-icon">
                                            <img src="http://baohiem.com.va/img-system/system/trash_white.svg" alt="" />
                                          </span>
                                        </button>
                                        <button class="btn btn-info me-1 saveButton" style="display: none;">
                                          <span class="icon-item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-check-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                              <path d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                        </button>
                                        <button class="btn btn-warning cancelButton" style="display: none;">
                                          <span class="icon-item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                              <path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.489 5.8a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z" stroke-width="0" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                        </button>
                                      </div>
                                    </h6>
                                  </td>
                                </tr>
                                <tr role="row">
                                  <td>
                                    <p class="mb-0 fw-normal fs-4 text-center"></p>
                                  </td>
                                  <td>
                                    <div class="btn-group d-flex">
                                      <button class="btn btn-info me-1 saveButton">
                                        <span class="icon-item-icon">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-check-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path>
                                          </svg>
                                        </span>
                                      </button>
                                    </div>
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="company" value="" data-original-value="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="value" value="" data-original-value="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="note" value="" data-original-value="" />
                                  </td>
                                  <td></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-hospital" role="tabpanel" aria-labelledby="v-pills-insurance-tab">
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
                                    <h6 class="fs-4 fw-semibold mb-0">Tên nhóm khách hàng</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Thao tác</h6>
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr role="row" data-id="24">
                                  <td>
                                    <input type="checkbox" class="toggleCheckbox custom-control-input" id="" name="" value="" />
                                  </td>
                                  <td>
                                    <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="insurance_name" value="PVFCCO" data-original-value="PVFCCO" style="width: 100%;" disabled="" />
                                  </td>
                                  <td style="width: 150px;">
                                    <h6 class="fs-4 fw-semibold mb-0">
                                      <div class="btn-group d-flex">
                                        <button class="btn btn-success me-1 editButton">
                                          <span class="icon-item-icon">
                                            <img src="http://baohiem.com.va/img-system/system/edit_white.svg" />
                                          </span>
                                        </button>
                                        <button class="btn btn-danger tabledit-delete-button" data-id="24">
                                          <span class="icon-item-icon">
                                            <img src="http://baohiem.com.va/img-system/system/trash_white.svg" alt="" />
                                          </span>
                                        </button>
                                        <button class="btn btn-info me-1 saveButton" style="display: none;">
                                          <span class="icon-item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-check-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                              <path d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                        </button>
                                        <button class="btn btn-warning cancelButton" style="display: none;">
                                          <span class="icon-item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                              <path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.489 5.8a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z" stroke-width="0" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                        </button>
                                      </div>
                                    </h6>
                                  </td>
                                </tr>
                                <tr role="row">
                                  <td>
                                    <p class="mb-0 fw-normal fs-4 text-center"></p>
                                  </td>
                                  <td>
                                    <div class="btn-group d-flex">
                                      <button class="btn btn-info me-1 saveButton">
                                        <span class="icon-item-icon">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-check-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path>
                                          </svg>
                                        </span>
                                      </button>
                                    </div>
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="company" value="" data-original-value="" style="width: 100%;" />
                                  </td>
                                  <td></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-followers" role="tabpanel" aria-labelledby="pills-followers-tab" tabindex="0">
                  <div class="mb-3">
                    <h5 class="mb-0">Cập nhật thông tin hợp đồng</h5>
                  </div>
                  <div class="row mt-3">
                    <div class="col-md-2">
                      <!-- Nav tabs -->
                      <div class="nav flex-column nav-pills" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-info-tab" data-bs-toggle="pill" href="#v-pills-info" role="tab" aria-controls="v-pills-info" aria-selected="true"> Thông tin hợp đồng </a>
                        <a class="nav-link" id="v-pills-clientuser-tab" data-bs-toggle="pill" href="#v-pills-clientuser" role="tab" aria-controls="v-pills-clientuser" aria-selected="false" tabindex="-1"> Phân loại khách hàng </a>
                      </div>
                    </div>
                    <div class="col-md-10">
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade active show" id="v-pills-info" role="tabpanel" aria-labelledby="v-pills-info-tab">
                          <div class="row mb-3">
                            <div class="col-xs-12 col-md-6">
                              <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Tên công ty</label>
                                <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                  <option value="1">Trường Sơn JOC</option>
                                  <option value="2">PVFCCO</option>
                                  <option value="3">Cửu Long JOC</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                              <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Niên hạn</label>
                                <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                  <option value="1">CL2023</option>
                                  <option value="2">CL2024</option>
                                  <option value="3">CL2025</option>
                                </select>
                              </div>
                            </div>
                          </div>
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
                                    <h6 class="fs-4 fw-semibold mb-0">Tên hợp đồng</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Số hợp đồng/phụ lục</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Ngày ký</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Thời gian hiệu lực</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Thời gian kết thúc</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0 text-center">Gia hạn</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Tổng giá trị hợp đồng</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Thao tác</h6>
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr role="row" data-id="24">
                                  <td>
                                    <input type="checkbox" class="toggleCheckbox custom-control-input" id="" name="" value="" />
                                  </td>
                                  <td>
                                    <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="company" value="DH Cuu Long 2023" data-original-value="DH Cuu Long 2023" disabled="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="address" value="01/2022HĐ CL" data-original-value="01/2022HĐ CL" disabled="" />
                                  </td>
                                  <td>
                                    <div class="input-group">
                                      <input type="text" class="inputField form-control singledate" value="01/01/2023" disabled="" />
                                    </div>
                                  </td>
                                  <td>
                                    <div class="input-group">
                                      <input type="text" class="inputField form-control singledate" value="01/01/2023" disabled="" />
                                    </div>
                                  </td>
                                  <td>
                                    <div class="input-group">
                                      <input type="text" class="inputField form-control singledate" value="31/12/2023" disabled="" />
                                    </div>
                                  </td>
                                  <td class="text-center">
                                    <input type="checkbox" class="inputField custom-control-input" id="customCheck1" disabled=""/>
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="address" value="0" data-original-value="0" disabled="" />
                                  </td>
                                  <td>
                                    <h6 class="fs-4 fw-semibold mb-0">
                                      <div class="btn-group d-flex">
                                        <button class="btn btn-success me-1 editButton">
                                          <span class="icon-item-icon">
                                            <img src="http://baohiem.com.va/img-system/system/edit_white.svg" />
                                          </span>
                                        </button>
                                        <button class="btn btn-danger tabledit-delete-button" data-id="24">
                                          <span class="icon-item-icon">
                                            <img src="http://baohiem.com.va/img-system/system/trash_white.svg" alt="" />
                                          </span>
                                        </button>
                                        <button class="btn btn-info me-1 saveButton" style="display: none;">
                                          <span class="icon-item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-check-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                              <path d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                        </button>
                                        <button class="btn btn-warning cancelButton" style="display: none;">
                                          <span class="icon-item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                              <path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.489 5.8a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z" stroke-width="0" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                        </button>
                                      </div>
                                    </h6>
                                  </td>
                                </tr>
                                <tr role="row">
                                  <td>
                                    <p class="mb-0 fw-normal fs-4 text-center"></p>
                                  </td>
                                  <td>
                                    <div class="btn-group d-flex">
                                      <button class="btn btn-info me-1 saveButton">
                                        <span class="icon-item-icon">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-check-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path>
                                          </svg>
                                        </span>
                                      </button>
                                    </div>
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="company" value="" data-original-value="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="company" value="" data-original-value="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control singledate" type="text" name="address" value="" data-original-value="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control singledate" type="text" name="phone" value="" data-original-value="" />
                                  </td>
                                  <td>
                                    <input class="inputField form-control singledate" type="text" name="ceo" value="" data-original-value="" />
                                  </td>
                                  <td class="text-center">
                                    <input type="checkbox" class="inputField custom-control-input" id="customCheck1" />
                                  </td>
                                  <td class="text-center">
                                    <input class="inputField form-control" type="text" name="contactuser" value="" data-original-value="" />
                                  </td>
                                  <td></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-clientuser" role="tabpanel" aria-labelledby="v-pills-clientuser-tab">
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
                                    <h6 class="fs-4 fw-semibold mb-0">Tên nhóm khách hàng</h6>
                                  </th>
                                  <th>
                                    <h6 class="fs-4 fw-semibold mb-0">Thao tác</h6>
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr role="row" data-id="24">
                                  <td>
                                    <input type="checkbox" class="toggleCheckbox custom-control-input" id="" name="" value="" />
                                  </td>
                                  <td>
                                    <p class="mb-0 fw-normal fs-4 text-center">1</p>
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="insurance_name" value="VIP" data-original-value="VIP" style="width: 100%;" disabled="" />
                                  </td>
                                  <td style="width: 150px;">
                                    <h6 class="fs-4 fw-semibold mb-0">
                                      <div class="btn-group d-flex">
                                        <button class="btn btn-success me-1 editButton">
                                          <span class="icon-item-icon">
                                            <img src="http://baohiem.com.va/img-system/system/edit_white.svg" />
                                          </span>
                                        </button>
                                        <button class="btn btn-danger tabledit-delete-button" data-id="24">
                                          <span class="icon-item-icon">
                                            <img src="http://baohiem.com.va/img-system/system/trash_white.svg" alt="" />
                                          </span>
                                        </button>
                                        <button class="btn btn-info me-1 saveButton" style="display: none;">
                                          <span class="icon-item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-check-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                              <path d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                        </button>
                                        <button class="btn btn-warning cancelButton" style="display: none;">
                                          <span class="icon-item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                              <path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-6.489 5.8a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z" stroke-width="0" fill="currentColor"></path>
                                            </svg>
                                          </span>
                                        </button>
                                      </div>
                                    </h6>
                                  </td>
                                </tr>
                                <tr role="row">
                                  <td>
                                    <p class="mb-0 fw-normal fs-4 text-center"></p>
                                  </td>
                                  <td>
                                    <div class="btn-group d-flex">
                                      <button class="btn btn-info me-1 saveButton">
                                        <span class="icon-item-icon">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-discount-check-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path>
                                          </svg>
                                        </span>
                                      </button>
                                    </div>
                                  </td>
                                  <td>
                                    <input class="inputField form-control" type="text" name="company" value="" data-original-value="" style="width: 100%;" />
                                  </td>
                                  <td></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
@section('script')
    <script src="/assets/js/datetimepicker/moment.min.js"></script>
    <script src="/assets/js/datetimepicker/picker.js"></script>
    <script src="/assets/js/datetimepicker/picker.date.js"></script>
    <script src="/assets/js/datetimepicker/picker.time.js"></script>
    <script src="/assets/js/datetimepicker/daterangepicker.js"></script>
    <script src="/assets/js/datetimepicker/datetimepicker.init.js"></script>
    <script src="/assets/js/datetimepicker/daterangepicker.init.js"></script>
@endsection
