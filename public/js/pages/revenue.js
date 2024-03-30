$(document).ready(function () {
    var checkbox = $("#success2-check");
    var companySelect = $("#companySelectGeneral");
    var contractSelect = $("#contractSelectGeneral");

    // Disable/Enable company select and contract select based on checkbox state
    function toggleSelects() {
        if (checkbox.prop("checked")) {
            companySelect.prop("disabled", true);
            contractSelect.prop("disabled", true);
        } else {
            companySelect.prop("disabled", false);
            contractSelect.prop("disabled", false);
        }
    }

    // Initial state
    toggleSelects();

    // Add event listener to checkbox
    checkbox.change(function () {
        toggleSelects();
    });
});

if ($("#tableIdc10").length > 0) {
    var table = $("#tableIdc10").DataTable({
        "bLengthChange" : false
    });
}

if ($("#tableHospital").length > 0) {
    var table = $("#tableHospital").DataTable({
        "bLengthChange" : false
    });
}
