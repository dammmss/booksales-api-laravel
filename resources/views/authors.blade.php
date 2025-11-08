<!DOCTYPE html>
<html>
<head>
    <title>Daftar Author</title>
</head>
<body>
    <h2>Daftar Author</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nama Author</th>
        </tr>
        @foreach ($authors as $author)
        <tr>
            <td>{{ $author['id'] }}</td>
            <td>{{ $author['name'] }}</td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="{{ url('/genres') }}">Lihat Data Genre</a>
</body>
</html>
