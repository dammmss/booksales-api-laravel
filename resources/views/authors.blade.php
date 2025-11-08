<!DOCTYPE html>
<html>
<head>
    <title>Daftar Penulis</title>
</head>
<body>
    <h1>Daftar Penulis</h1>

    @if(!empty($authors))
        <ul>
            @foreach($authors as $author)
                <li>
                    <strong>{{ $author['name'] }}</strong> <br>
                    {{ $author['bio'] }}
                    <hr>
                </li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada data penulis.</p>
    @endif
</body>
</html>
