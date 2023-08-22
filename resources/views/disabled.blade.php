<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disabled</title>
</head>

<body>
    <h1>Hello @{{ $name }}</h1>


    @verbatim
        <p>
            Hello {{ $name }}
            Hello {{ $name }}
            Hello {{ $name }}
            Hello {{ $name }}
        </p>
    @endverbatim
</body>

</html>
