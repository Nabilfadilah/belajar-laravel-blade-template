<html>

<head>
    <style>
        .red {
            color: red;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>

<body>
    {{-- kalau hobby nya itu ada bold dan red --}}
    @foreach ($hobbies as $hobby)
        {{-- pake derective @class dengan array --}}
        {{-- kalau hooby nilainya ada 'love' = true --}}
        {{-- maka kondisi terpenuhi --}}
        <li @class(['red', 'bold' => $hobby['love']])>{{ $hobby['name'] }}</li>
    @endforeach
</body>

</html>
