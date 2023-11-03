<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add doctor</title>
</head>
<body>
    add a doctor 
    <br>
    <a href="{{route('doctors')}}">back</a>
    <hr>
    <form action="{{route('doctor_to_help')}}" method="POST">
        @csrf
        <label for="name">name</label><br>
        <input type="text" name="name" id="name">
        <br>
        <label for="phone_num">phone number </label><br>
        <input type="text" name="phone_num" id="phone_num">
        <br>
        <label for="email">email </label><br>
        <input type="email" name="email" id="email">
        <br>
        <label for="country">Country</label><br>
        <select name="Country" id="Country">
            @foreach ($countries as $country)
                <option value="{{ $country->name }}">{{ $country->name }}</option>
            @endforeach
        </select><br>
        <br>
        <button type="submit"> add</button>
    </form>
</body>
</html>