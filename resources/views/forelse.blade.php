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
        {{-- @forelse, dimana kita bisa menambahkan directive @empty ketika data array tidak ada isinya --}}
        @forelse ($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @empty
            <li>Tidak Punya Hobby</li>
        @endforelse
</body>

</html>
