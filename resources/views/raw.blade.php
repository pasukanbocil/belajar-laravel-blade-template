<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @php
        class Person
        {
            public string $name;
            public string $address;
        }
        
        $person = new Person();
        $person->name = 'Dicky';
        $person->address = 'Indonesia';
    @endphp

    <p>{{ $person->name }}</p>
    <p>{{ $person->address }}</p>
</body>

</html>
