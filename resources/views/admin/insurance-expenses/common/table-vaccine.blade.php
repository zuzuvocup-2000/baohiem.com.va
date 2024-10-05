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
                        <tr role="row">
                            <td colspan="2">
                                @include('common/button-loading', ['class' =>
                                'btn-create-company'])
                            </td>
                            <td>
                                <input class="inputField form-control create-company-address" type="text" name="address"
                                    value="" />
                            </td>
                            <td>
                                <input class="inputField form-control create-company-phone_number" type="text"
                                    name="phone_number" value="" />
                            </td>
                            <td>
                                <input class="inputField form-control create-company-email" type="text" name="email"
                                    value="" />
                            </td>
                            <td>
                                <input class="inputField form-control create-company-ceo_name" type="text"
                                    name="ceo_name" value="" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>