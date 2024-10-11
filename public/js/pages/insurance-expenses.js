$(document).ready(function () {
    $('.bg-infor').on('click', function () {
        let _this = $(this)
        var card_body = $('.card-body');
        card_body.find('.info-contract').slideToggle();
    });

    $(document).on('click', '.btn-get-detail', function () {
        var id = $(this).data('id');
        var periodId = $('#periodSelectGeneral').val()
        document.getElementById('formCreatePaymentInsurance').reset();
        $('#formCreatePaymentInsurance').attr('action', '/insurance-expenses/create');

        $.ajax({
            url: '/insurance-expenses/detail',
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
                // Xử lý lỗi nếu có
                console.error(error);
            }
        });
    });

    $('.btn-add-content-pay').click(function () {
        var currentRow = $(this).closest('tr');
        // var paymentTypeId = currentRow.find('.create-insurance-payment_type').val();
        // var amount_paid = currentRow.find('.create-insurance-amount_paid').val();
        // var expected_payment = currentRow.find('.create-insurance-expected_payment').val();
        // var rejected_amount = currentRow.find('.create-insurance-rejected_amount').val();
        // var note = currentRow.find('.create-insurance-note').val();
        var paymentTypeId = 0;
        var amount_paid = 0;
        var expected_payment = 0;
        var rejected_amount = 0;
        var note = '';
        var newRow = `
            <tr class="clone-content-pay">
                <td>
                    <div class="btn-group d-flex justify-content-center">
                        <button class="btn btn-danger delete-content-pay"><span class="icon-item-icon"><img src="/img-system/system/trash_white.svg" alt=""></span></button>
                    </div>
                </td>
                <td>
                    <select class="form-select create-insurance-payment_type" name="payment_type_id[]">`;
        paymentTypeList.forEach(element => {
            newRow += `<option value="${element.id}" ${paymentTypeId == element.id ? "selected" : ""}>${element.payment_type_name}</option>`;
        });
        newRow += `</select>
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

        $('.table-content-pay tbody').prepend(newRow);
        // $('.create-insurance-payment_type').val(2);
        // $('.create-insurance-amount_paid').val(0);
        // $('.create-insurance-expected_payment').val(0);
        // $('.create-insurance-rejected_amount').val(0);
        // $('.create-insurance-note').val('');
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
                $('#hospitalSelectGeneral').val(response.hospital_id)
                $('.create-contract-payment_date').val(response.payment_date)
                $('.create-contract-checkup_date').val(response.examination_date)
                $('.create-insurance-payment_type').val(response.payment_type_id)
                $('.create-insurance-note').val(response.note)
                $('.create-insurance-amount_paid').val(response.amount_paid).trigger('change')
                $('.create-insurance-expected_payment').val(response.expected_payment).trigger('change')
                $('.create-insurance-rejected_amount').val(response.rejected_amount).trigger('change')
                $('.create-insurance-paymennote_type').val(response.note)
                $('#formCreatePaymentInsurance').attr('action', '/insurance-expenses/update/' + response.payment_detail_id);
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });

    $(document).on('click', '.btn-save-payment-insurance', function (e) {
        if ($('.clone-content-pay').length == 0) {
            toastr.error("Chưa thêm thông tin chi bảo hiểm được. Vui lòng kiểm tra lại thông tin!");
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
        return false;
    })

    $(document).on('change', '.create-insurance-payment_type', function () {
        var showVaccinationContainer = false;
        $('.create-insurance-payment_type').each(function () {
            if ($(this).val() == 3) {
                showVaccinationContainer = true;
            }
        });

        if (showVaccinationContainer) {
            toastr.info('Vui lòng nhập tên chủng ngừa vào bảng trên !')
            $('.vaccination-container').show();
        } else {
            $('.vaccination-container').hide();
        }
    });

});

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
    $('.table-customer-pay tbody').html(html)
    if ($(".table-customer-pay.dataTable").length == 0) {
        $(".table-customer-pay").DataTable({
            "bLengthChange": false
        });
    }
}

$(document).on('click', '.btn-create-vaccination', function () {
    let _this = $(this);
    var formData = {
        injection_name: $('input[name="injection_name"]').val(),
        vaccination_id: $('select[name="vaccination"]').val(),
        months_to_first: $('input[name="months_to_first"]').val(),
        months_to_repeat: $('input[name="months_to_repeat"]').val(),
        injection_date: $('input[name="injection_date"]').val(),
    };
    disabledButtonLoading(_this)
    $.ajax({
        type: 'POST',
        url: '/ajax/vaccination/create',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: formData,
        success: function (response) {
            if (response.status === 'success') {
                toastr.success(response.message);
                window.location.reload()
            } else {
                toastr.error(response.message);
            }
            enabledButtonLoading(_this)
        },
        error: function (error) {
            toastr.error(error.responseJSON.message);
            enabledButtonLoading(_this)
        }
    });
    return false;
})