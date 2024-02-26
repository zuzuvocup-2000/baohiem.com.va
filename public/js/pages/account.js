$(document).ready(function () {
    $('.bg-infor').on('click', function() {
        let _this = $(this)
        var card_body = $('.card-body');
        card_body.find('.info-contract').slideToggle();
    });
});