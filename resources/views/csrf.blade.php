<html>

<body>
    <form action="" method="post">
        {{-- untuk menambah token --}}
        @csrf
        <input type="text" name="name">
        <input type="submit" name="Send">
    </form>
</body>

</html>
