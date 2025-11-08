<!DOCTYPE html>
<html lang="en">
<head>
    <title>Selamat Datang</title>
</head>
<body>
    <h1>Hallo</h1>
    <p>Selamat datang di toko BookSales!</p>

    @foreach ($books as $item )
        <ul>
            <li>{{ $item['title'] }}</li>
            <li>{{ $item['description'] }}</li>
            <li>{{ $item['price'] }}</li>
            <li>{{ $item['stock'] }}</li>
        </ul>
    @endforeach
</body>
</html>