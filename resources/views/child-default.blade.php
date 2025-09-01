{{-- Sama seperti sebelumnya, file ini juga mewarisi template dari `parent.blade.php`. --}}
@extends('parent')

{{-- Hanya mendefinisikan section "title". 
Section lain (misalnya "header" atau "content") 
tidak ditulis, sehingga akan tetap menggunakan isi default dari `parent.blade.php`. --}}
@section('title', 'Halaman Utama')
