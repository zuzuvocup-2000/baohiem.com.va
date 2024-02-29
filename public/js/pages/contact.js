
$(document).ready(function () {
    $('input[name="exampleRadios"]').click(function () {
        switch ($(this).val()) {
            case 'option1':
                $('input[name="email_receive"]').val('minhbrots2@gmail.com');
                break;
            case 'option2':
                $('input[name="email_receive"]').val('vanh.dev2000@gmail.com');
                break;
            case 'option3':
                $('input[name="email_receive"]').val('');
                break;
        }
    });
});
