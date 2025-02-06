$(document).ready(function () {
    $('.bg-infor').on('click', function () {
        let _this = $(this)
        var card_body = $('.card-body');
        card_body.find('.info-contract').slideToggle();
    });

    // TODOL: App cũ đang không có và cần clear nghiệp vụ
    $(document).on('click', '.btn-action-calculator', function (e) {
        e.preventDefault();
        alert("Chức năng đang phát triển")
        // $.ajax({
        //     url: '/ajax/insurance-expenses/calculate',
        //     method: 'POST',
        //     data: {
        //         _token: '{{ csrf_token() }}',
        //         sotienchi: $('#txt_sotienchi').val(),
        //         uocchi: $('#txt_uocchi').val(),
        //         gioihankyBH: $('#lbl_gioihankyBH').text(),
        //         chiTKkhac: $('#lbl_chiTKkhac').text(),
        //         goi: '{{ session("goi") }}'
        //     },
        //     success: function (response) {
        //         if (response.error) {
        //             alert(response.message);
        //         } else {
        //             $('#txt_sotienbituchoi').text(response.sotienbituchoi);
        //             $('#lbl_gioihanconlai').text(response.gioihanconlai);
        //         }
        //     }
        // });
    });

    $(document).on('click', '.btn-reset-content-pay', function () {
        render_insurance_expense_detail({}, 'reset')
        return false;
    })

    $(document).on('click', '.btn-get-detail', function () {
        var id = $(this).data('id');
        var periodId = $('#periodSelectGeneral').val()
        document.getElementById('formCreatePaymentInsurance').reset();
        $('#formCreatePaymentInsurance').attr('action', '/insurance-expenses/create');

        $.ajax({
            url: '/ajax/insurance-expenses/detail',
            type: 'GET',
            data: {
                id: id,
                periodId: periodId
            },
            success: function (response) {
                $('.contract_id_hidden').val(response.customer.contract_id)
                $('.customer_id_hidden').val(response.customer.id)
                $('.period_id_hidden').val(response.customer.period_id)
                $('.company_name_customer').text(response.customer.company_name)
                $('.period_name_customer').text(response.customer.company_name)
                $('.contract_name_customer').text(response.customer.contract_name)
                $('.limit_money_customer').text(addCommas(response.customer.moneyStartPeriod))
                $('.theRemainingAmount').text(addCommas(response.customer.theRemainingAmount))
                $('.amountSpent').text(addCommas(response.amountSpent))
                $('.fullname_customer').text(response.customer.full_name)
                $('.card_number_customer').text(response.customer.card_number)
                $('.gender_customer').text(response.customer.gender)
                $('.birthday_customer').text(formatDate(response.customer.birth_year))
                $('.package_name_customer').text(response.customer.package_name)
                $('.type_customer').text(response.customer.type_name)
                $('.old_card_customer').text(response.customer.old_card_number)
                $('.account_holder_customer').removeAttr('checked');
                $('.account_holder_customer[value="' + response.customer.account_holder + '"]').attr('checked', 'checked');
                $('.account_package_customer').text(response.customer.group_name)
                render_customer_payment(response.customerPay);
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });

    $('.btn-add-content-pay').click(function () {
        render_insurance_expense_detail({}, 'create')
        return false;
    });

    $(document).on('click', '.delete-content-pay', function () {
        $(this).closest('tr').remove()
        return false;
    })

    $(document).on('click', '.btn-update-insurance', function () {
        var id = $(this).closest('tr').data('id');
        $.ajax({
            url: '/ajax/insurance-expenses/detail/' + id,
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                render_insurance_expense_detail(response, 'update')
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });

    $(document).on('click', '.btn-save-payment-insurance', function (e) {
        e.preventDefault();

        if (!validateInsurancePaymentForm()) {
            return false;
        }

        $.ajax({
            url: '/insurance-expenses/check-period',
            type: 'GET',
            data: {
                'payment_date': $('.create-contract-payment_date').val(),
                'period_id': $('.period_id_hidden').val(),
                'contract_id': $('.contract_id_hidden').val(),
                'customer_id': $('.customer_id_hidden').val()
            },
            success: function (response) {
                if (!response.status) {
                    toastr.error(response.message);
                } else {
                    $('#formCreatePaymentInsurance').submit()
                }
            }
        });
    });
});

/**
 * Kiểm tra tất cả các trường required, thêm class 'is-invalid' nếu thiếu dữ liệu
 * Hiển thị toàn bộ các lỗi cùng lúc
 * @returns {boolean} true nếu hợp lệ, false nếu có lỗi
 */
function validateInsurancePaymentForm() {
    let isValid = true;
    let errorMessages = [];

    // Danh sách các trường cần kiểm tra
    const requiredFields = [
        { selector: '#hospitalSelectGeneral', message: 'Vui lòng chọn bệnh viện!' },
        { selector: '.create-contract-payment_date', message: 'Ngày nhập không được để trống!' },
        { selector: '.create-contract-checkup_date', message: 'Ngày khám không được để trống!' },
        { selector: 'input[name="amount_paid[]"]', message: 'Số tiền chi trả phải lớn hơn 0!' },
        { selector: 'select[name="payment_type_id[]"]', message: 'Vui lòng chọn nội dung chi!' }
    ];

    // Duyệt qua tất cả các trường để kiểm tra
    requiredFields.forEach(field => {
        $(field.selector).each(function () {
            let value = $(this).val().trim();
            let isEmpty = value === '' || value === '0';

            if (isEmpty) {
                $(this).addClass('is-invalid'); // Đánh dấu ô bị lỗi
                errorMessages.push(field.message); // Thêm lỗi vào danh sách
                isValid = false;
            } else {
                $(this).removeClass('is-invalid'); // Xóa lỗi nếu hợp lệ
            }
        });
    });

    // Nếu có lỗi, hiển thị tất cả thông báo lỗi cùng lúc
    if (!isValid) {
        toastr.error(errorMessages.join('<br>'));
    }

    return isValid;
}

function render_insurance_expense_detail(response, action = 'update') {
    const {
        payment_type_id: paymentTypeId = 0,
        amount_paid = 0,
        expected_payment = 0,
        rejected_amount = 0,
        note = '',
        hospital_id,
        payment_date,
        examination_date,
        payment_detail_id
    } = response;

    let newRow = `
        <tr class="clone-content-pay">
            <td>
                ${action === 'create' || action === 'reset' ? `
                <div class="btn-group d-flex justify-content-center">
                    <button class="btn btn-danger delete-content-pay">
                        <span class="icon-item-icon">
                            <img src="/img-system/system/trash_white.svg" alt="">
                        </span>
                    </button>
                </div>` : ''}
            </td>
            <td>
                <select class="form-select create-insurance-payment_type" name="payment_type_id[]">
                    ${paymentTypeList.map(element => `
                        <option value="${element.id}" ${paymentTypeId == element.id ? 'selected' : ''}>
                            ${element.payment_type_name}
                        </option>`).join('')}
                </select>
            </td>
            <td class="text-center">
                <input type="text" class="form-control int" name="amount_paid[]" value="${amount_paid}">
            </td>
            <td class="text-center">
                <input type="text" class="form-control int" name="expected_payment[]" value="${expected_payment}">
            </td>
            <td class="text-center">
                <input type="text" class="form-control int" name="rejected_amount[]" value="${rejected_amount}">
            </td>
            <td>
                <input type="text" class="form-control" name="note[]" value="${note}">
            </td>
        </tr>`;

    if (action === 'create' || action === 'reset') {
        $('.create-insurance-payment_type, .create-insurance-amount_paid, .create-insurance-expected_payment, .create-insurance-rejected_amount, .create-insurance-note').val('');
        $('.create-insurance-payment_type').val(2);
        $('.btn-add-content-pay').removeClass('d-none');
        $('#formCreatePaymentInsurance').attr('action', '/insurance-expenses/create');

        if (action === 'reset') {
            toastr.success('Reset về thêm mới chi bảo hiểm!');
            $('.table-content-pay tbody').html(newRow);
        } else {
            $('.table-content-pay tbody').append(newRow);
        }
    } else if (action === 'update') {
        toastr.success('Thu thập dữ liệu thành công');
        $('#hospitalSelectGeneral').val(hospital_id);
        $('.create-contract-payment_date').val(payment_date);
        $('.create-contract-checkup_date').val(examination_date);
        $('#formCreatePaymentInsurance').attr('action', `/insurance-expenses/update/${payment_detail_id}`);
        $('.table-content-pay tbody').html(newRow);
        $('.btn-add-content-pay').addClass('d-none');
    }

    $('.int').trigger('change');
    return false;
}

function render_customer_payment(customerList) {
    let html = "";
    $('.table-customer-pay tbody').html("")
    $.each(customerList, function (indexInArray, valueOfElement) {
        html += "<tr role='row' data-id='" + valueOfElement.payment_detail_id + "'>";
        html += "<td>";
        html += "<h6 class='fs-4 fw-semibold mb-0'>";
        html += "<div class='btn-group d-flex justify-content-center '>";
        html += "<button class='btn btn-success me-1 btn-update-insurance'>";
        html += "<span class='icon-item-icon'>";
        html += "<img src='/img-system/system/edit_white.svg' />";
        html += "</span>";
        html += "</button>";
        html += "<button class='btn btn-danger delete-button-payment'>";
        html += "<span class='icon-item-icon'>";
        html += "<img src='/img-system/system/trash_white.svg' alt='' />";
        html += "</span>";
        html += "</button>";
        html += "</div>";
        html += "</h6>";
        html += "</td>";
        html += "<td>";
        html += "<input class='inputField form-control update-full_name' value='" + valueOfElement.full_name + "' type='text' name='full_name' disabled=''/>";
        html += "</td>";
        html += "<td>";
        html += "<input class='inputField form-control update-examination_date' value='" + formatDate(valueOfElement.examination_date) + "' type='text' name='examination_date' disabled=''/>";
        html += "</td>";
        html += "<td>";
        html += "<input class='inputField form-control update-payment_date' value='" + formatDate(valueOfElement.payment_date) + "' type='text' name='payment_date' disabled='' />";
        html += "</td>";
        html += "<td>";
        html += "<input class='inputField form-control update-amount_paid' value='" + addCommas(valueOfElement.amount_paid) + "' type='text' name='amount_paid' disabled=''/>";
        html += "</td>";
        html += "<td>";
        html += "<input class='inputField form-control update-note' value='" + valueOfElement.note + "' type='text' name='note' disabled=''/>";
        html += "</td>";
        html += "<td class='text-center'>";
        html += "<input class='form-check-input inputField update-approved' " + (valueOfElement.approved == 1 ? "checked" : "") + " type='checkbox' value='1' disabled='' name='approved' />";
        html += "</td>";
        html += "<td>";
        html += "<input class='inputField form-control update-hospital_name' value='" + valueOfElement.hospital_name + "' type='text' name='hospital_name' disabled=''/>";
        html += "</td>";
        html += "</tr>";
    });
    $('.table-customer-pay tbody').html(html);
    if ($(".table-customer-pay.dataTable").length == 0) {
        $(".table-customer-pay").DataTable({
            "bLengthChange": false,
            "searching": false,
            "ordering": false
        });
    }
}