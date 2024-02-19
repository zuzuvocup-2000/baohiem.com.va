$(document).ready(function () {
    $(".toggleAll").on("change", function () {
        $(".toggleCheckbox").prop("checked", $(this).prop("checked"));
    });
    $(".toggleCheckbox").on("change", function () {
        $(".toggleAll").prop("checked", $(".toggleCheckbox:checked").length === $(".toggleCheckbox")
            .length);
    });
});
