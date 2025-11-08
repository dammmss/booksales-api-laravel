<!DOCTYPE html>
<html>
<head>
    <title>Daftar Genre</title>
</head>
<body>
    <h2>Daftar Genre</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nama Genre</th>
        </tr>
        @foreach ($genres as $genre)
        <tr>
            <td>{{ $genre['id'] }}</td>
            <td>{{ $genre['name'] }}</td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="{{ url('/authors') }}">Lihat Data Author</a>
</body>
</html>
