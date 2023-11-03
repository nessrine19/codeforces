<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>products and alternatives</title>
</head>
<body>

    <hr>
    <ul>
        <li><a href="{{route('donations')}}">donations </a></li>
        <li><a href="{{route('doctors')}}"> doctors </a></li>
        <li> <a href="#">boycott</a></li>
        <li> <a href="#">join us </a></li>
    </ul>
    <hr>
    <br>
    <h1>Products and Alternatives</h1>

    <table border="1">
        <tr>
            <th>Product Name</th>
            <th>Description</th>
            <th>Alternative Products</th>
        </tr>

        @foreach ($products as $product)
            <tr>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->desc }}</td>
                <td>
                    <ul>
                        @foreach ($product->products_alternative as $alternative)
                            <li>
                                <strong>{{ $alternative->product_alt_name }}</strong><br>
                                Price: {{ $alternative->price }}
                            </li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>