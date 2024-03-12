$(document).ready(function () {
    $(".toggleAll").on("change", function () {
        $(this).parents('table').find(".toggleCheckbox").prop("checked", $(this).prop("checked"));
    });
    $(".toggleCheckbox").on("change", function () {
        $(this).parents('table').find(".toggleAll").prop("checked", $(this).parents('table').find(".toggleCheckbox:checked").length === $(this).parents('table').find(".toggleCheckbox")
            .length);
    });
});

$(document).ready(function () {
    $(document).on('click', '.editButton', function () {
        var row = $(this).closest("tr");
        var inputFields = row.find(".inputField");
        // Lưu giá trị ban đầu của input trên element
        inputFields.each(function () {
            $(this).attr("data-original-value", $(this).val());
        });
        inputFields.prop("disabled", false);
        $(this).hide();
        row.find(".saveButton, .cancelButton").show();
        row.find(".tabledit-delete-button").hide();
    })
    $(document).on('click', '.saveButton', function () {
        var row = $(this).closest("tr");
        var inputFields = row.find(".inputField");
        inputFields.prop("disabled", true);
        $(this).hide();
        row.find(".editButton").show();
        row.find(".tabledit-delete-button").show();
        row.find(".cancelButton").hide();
    })
    $(document).on('click', '.cancelButton', function () {
        var row = $(this).closest("tr");
        var inputFields = row.find(".inputField");
        // Khôi phục giá trị ban đầu của input từ thuộc tính data
        inputFields.each(function () {
            $(this).val($(this).attr("data-original-value"));
        });
        inputFields.prop("disabled", true);
        $(this).hide();
        row.find(".editButton").show();
        row.find(".tabledit-delete-button").show();
        row.find(".saveButton").hide();
    })
});

function disabledButtonLoading(_this){
    _this.attr('disabled', 'disabled')
    _this.find('.default').addClass('d-none')
    _this.find('.loading-dot').removeClass('d-none')
}

function enabledButtonLoading(_this){
    _this.removeAttr('disabled')
    _this.find('.default').removeClass('d-none')
    _this.find('.loading-dot').addClass('d-none')
}
