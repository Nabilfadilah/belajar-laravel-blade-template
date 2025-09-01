{{-- sebuah kode yang cukup sekali saja ditampilkan, walaupun layout ditampilkan lebih dari sekali, misal kode CSS atau JavaScript
Kita bisa menggunakan directive @each dan @once --}}

@once
    <style>
        .red {
            color: red;
        }
    </style>
@endonce

{{-- namanya siapa? --}}
{{-- ambil dari user 'nama' --}}
<h1>{{ $user['name'] }}</h1>

<ul>
    {{-- iterasikan hobby --}}
    @foreach ($user['hobbies'] as $hobby)
        {{-- dan berikan tulisannya warna merah --}}
        <li class="red">{{ $hobby }}</li>
    @endforeach
</ul>
