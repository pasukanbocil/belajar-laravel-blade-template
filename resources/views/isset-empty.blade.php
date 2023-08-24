<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isset-Empty</title>
</head>

<body>
    <p>
        @isset($name)
            Hello, My Name Is {{ $name }}
        @endisset
    </p>

    <p>
        @empty($hobbies)
            I Don't Have Any Hobbies.
        @endempty
    </p>
</body>

</html>
