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
    <br><br><hr>
    <form action="/products_add" method="POST">
        @csrf
        <label for="product_name">product_name</label><br>
        <input type="text" name="product_name" placeholder="Product Name"><br>
        <label for="desc">description</label><br>
        <input type="text" name="desc" placeholder="desc "><br>
        <label for="image">image</label><br>
        <input type="file" name="image" placeholder="image "><br>
        <label for="country">Country</label><br>
        <select name="Country" id="Country">
            @foreach ($countries as $country)
                <option value="{{ $country->name }}">{{ $country->name }}</option>
            @endforeach
        </select><br>
        <label for="category">category</label><br>
        <select name="category" id="category">
            @foreach ($categories as $category)
                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
            @endforeach
        </select><br>
        <button type="submit">Add Product</button>
    </form>
</body>
</html>