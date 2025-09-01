<html>

<head>
    {{-- @yield'title', perlu di implementasikan di child nya  --}}
    {{-- dan akan ditampilkan disini --}}
    <title>Nama Aplikasi - @yield('title')</title>
</head>

<body>

    @section('header')
        <h1>Default Header</h1>
    @show

    @section('content')
        <p>Default Content</p>
    @show

</body>

</html>
