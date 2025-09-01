<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        {{-- pake @foreach, bagus ini --}}
        @foreach ($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @endforeach ($i = 0; $i < $limit; $i++) </div>
</body>

</html>
