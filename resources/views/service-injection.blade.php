<html>

<body>
    {{-- untuk mengambil object dari service container --}}
    @inject('service', 'App\Services\SayHello')
    {{-- sayHello memiliki parameter name --}}
    <h1>{{ $service->sayHello($name) }}</h1>
</body>

</html>
