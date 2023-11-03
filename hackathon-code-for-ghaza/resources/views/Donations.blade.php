<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donations</title>
</head>
<body>
    <h1>Donations</h1>
    <br>
    <a href="{{route('home')}}">home </a>
    <table>
        <thead>
            <tr>
                <th>Organization Name</th>
                <th>Description</th>
                <th>Link</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($donationDetails as $donationDetail)
            <tr>
                <td>{{ $donationDetail['donation']->organization_name }}</td>
                <td>{{ $donationDetail['donation']->desc }}</td>
                <td>{{ $donationDetail['donation']->link }}</td>
                <td><a href="{{ $donationDetail['donation']->link }}" target="_blank">{{ $donationDetail['donation']->link }}</a></td>
                <td>{{ $donationDetail['country_name'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>