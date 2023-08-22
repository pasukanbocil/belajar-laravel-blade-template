<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If Statement</title>
</head>

<body>
    <p>
        @if (count($hobbies) == 1)
            I Have One Hobby
        @elseif(count($hobbies) > 1)
            I Have Multiple Hobbies!
        @else
            I Don't Have Any Hobbies!
        @endif
    </p>
</body>

</html>
