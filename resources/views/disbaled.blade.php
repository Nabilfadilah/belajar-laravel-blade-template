<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disable</title>
</head>

<body>
    {{-- kalau pake @ otomatis tidak akan di render, hanya tulisan orsinil aja --}}
    <h2>Hello @{{ $name }}</h2>

    {{-- kalau ini pasti di render --}}
    <h1>{{ $name }}</h1>

    {{-- kalau banyak yang mau di ignore apa adanya  --}}
    @verbatim
        Hello {{ $name }}
        Hello {{ $name }}
        Hello {{ $name }}
        Hello {{ $name }}
    @endverbatim
</body>

</html>
