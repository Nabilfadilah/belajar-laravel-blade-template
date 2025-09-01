<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- directive if statement --}}
    @if (count($hobbies) == 1)
        I have one hobby!
    @elseif (count($hobbies) > 1)
        I don't multiple hobbies!
    @else
        I don't have any hobbies!
    @endif
</body>

</html>
