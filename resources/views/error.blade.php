<html>

<body>
    {{-- menangkap error --}}
    @error('name')
        {{-- dan tangkap message nya --}}
        <p>{{ $message }}</p>
    @enderror

    @error('password')
        <p>{{ $message }}</p>
    @enderror

</body>

</html>
