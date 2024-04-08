$(document).ready(function () {
    $('.bg-infor').on('click', function () {
        let _this = $(this)
        var card_body = $('.card-body');
        card_body.find('.info-contract').slideToggle();
    });

    $(document).on('click', '.btn-get-detail', function () {
        var id = $(this).data('id');
        var periodId = $('#periodSelectGeneral').val()
        console.log(id);
        console.log(periodId);

        $.ajax({
            url: '/insurance-expenses/detail',
            type: 'GET',
            data: {
                id: id,
                periodId: periodId
            },
            success: function (response) {
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
});

function render_customer_payment(customerList) {
    let html = "";
    $('.table-customer-pay tbody').html("")
    $.each(customerList, function (indexInArray, valueOfElement) {
        html += "<tr role='row' data-id='" + valueOfElement.id + "'>";
        html += "<td>";
        html += "<h6 class='fs-4 fw-semibold mb-0'>";
        html += "<div class='btn-group d-flex justify-content-center'>";
        html += "<button class='btn btn-success me-1'>";
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
        html += "<input class='form-check-input inputField update-approved' " + (valueOfElement.approved ? "checked" : "") + " type='checkbox' value='1' disabled='' name='approved' />";
        html += "</td>";
        html += "<td>";
        html += "<input class='inputField form-control update-hospital_name' value='" + valueOfElement.hospital_name + "' type='text' name='hospital_name' disabled=''/>";
        html += "</td>";
        html += "</tr>";
    });
    $('.table-customer-pay tbody').html(html)
    var table = $(".table-customer-pay").DataTable({
        "bLengthChange" : false
    });
}
