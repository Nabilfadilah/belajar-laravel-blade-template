<html>

<body>
    <form action="">
        {{-- jika kondisi $user = true/premium, maka akan ada checked nya! --}}
        <input type="checkbox" @checked($user['premium']) value="Premium" /> <br />
        {{-- kalau readonly tidak sama dengan admin --}}
        {{-- kalau sama dengan admin, maka tidak akan readonly --}}
        <input type="text" value="{{ $user['name'] }}" @readonly(!$user['admin']) /> <br />
    </form>
</body>

</html>
