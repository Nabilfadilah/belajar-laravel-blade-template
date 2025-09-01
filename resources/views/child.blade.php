{{-- → Mengindikasikan bahwa file ini adalah child template
yang mewarisi layout utama dari file `parent.blade.php`. --}}
@extends('parent')

{{-- → Mendefinisikan isi untuk section bernama "title".
Jadi di parent ada @yield('title'), dan di sini akan diisi "Halaman Utama". --}}
@section('title', 'Halaman Utama')

@section('header')
    {{-- → Mendefinisikan section bernama "header".
    Isi section ini akan menggantikan atau menambahkan konten pada @yield('header') di parent. --}}

    {{-- @parent berarti menampilkan isi default dari parent.blade.php di section ini juga. --}}
    @parent

    {{-- → Konten tambahan khusus untuk child ini.
    Jadi, selain konten default dari parent,
    akan ada teks "Deskripsi Header". --}}
    <h1>Deskripsi Header</h1>
@endsection

{{-- → Mendefinisikan section bernama "content".
Kontennya hanya milik child ini. --}}
@section('content')
    <p>Ini adalah halaman utama</p>
@endsection
