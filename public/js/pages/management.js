$(document).ready(function() {
    $("input[name='exampleRadios'], input[name='exampleRadios2']").change(function() {
        var value = $(this).val();
        var parent = $(this).closest(".row");
        var inputField = parent.find(".input-hide");
        var selectField = parent.find(".select-hide");
        var formField = parent.find(".form-hide");
        
        if (value === "option1") { // Thêm mới
            inputField.show();
            selectField.hide();
            formField.hide();
            inputField.find(".input-modal-account").val("");
        } else if (value === "option2") { // Sửa
            inputField.hide();
            selectField.show();
            formField.show();
            inputField.find(".input-modal-account").val("Tên phòng ban");
            selectField.find("#companySelect").val(selectField.find("#companySelect option:first").val());
        } else if (value === "option3") { // Xóa
            inputField.hide();
            selectField.show();
            formField.hide();
            inputField.find(".input-modal-account").val("");
        }
    });
});
$('#departmentSelect').on('change', function () {
    var department = $(this).val();
    window.location.href = window.location.pathname + '?department=' + department;
})