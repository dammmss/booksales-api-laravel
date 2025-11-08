<!DOCTYPE html>
<html>
<head>
    <title>Daftar Genre</title>
</head>
<body>
    <h1>Daftar Genre</h1>

    @if(!empty($genres))
        <ul>
            @foreach($genres as $genre)
                <li>{{ $genre['name'] }}</li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada data genre.</p>
    @endif
</body>
</html>
