<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    @if(!empty($books))
        <ul>
            @foreach($books as $book)
                <li>
                    <strong>{{ $book['title'] }}</strong> <br>
                    {{ $book['description'] }} <br>
                    Harga: Rp{{ number_format($book['price'], 0, ',', '.') }} <br>
                    Stok: {{ $book['stock'] }}
                    <hr>
                </li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada data buku.</p>
    @endif
</body>
</html>
