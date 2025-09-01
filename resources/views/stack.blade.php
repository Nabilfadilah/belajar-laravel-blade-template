<html>

<body>
    {{-- lakukan pust ke stack yang namanya 'script' --}}
    @push('script')
        {{-- ini isi push nya --}}
        <script src="first.js" />
    @endpush

    // lalu push lagi ke stack yang sama
    @push('script')
        // ini isi push nya
        <script src="second.js" />
    @endpush

    @prepend('script')
        <script src="third.js" />
    @endprepend

    @stack('script')
</body>

</html>
