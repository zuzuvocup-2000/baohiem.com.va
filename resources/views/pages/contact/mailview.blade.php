<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
</head>
<body>
    <p>Người gửi: {{ $email_title }}</p>
    <p>Tiêu đề: {{ $title }}</p>
    <p>Nội dung:</p>
    {!! $ckeditor_contact !!}
</body>
</html>