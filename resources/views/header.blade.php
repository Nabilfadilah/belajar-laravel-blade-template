{{-- cek apakah ada title? --}}
@isset($title)
    {{-- kalau ada tambahkan h1 dan title nya disini --}}
    <h1>{{ $title }}</h1>
@else
    {{-- dan kalau gak ada kasih ini --}}
    <h1>Fadilah Stations</h1>
@endisset

{{-- kalau ada description kita print --}}
@isset($description)
    <p>{{ $description }}</p>
@endisset
