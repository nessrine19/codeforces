<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Doctors</title>
</head>
<body>
    <h1>List of Doctors</h1>
    <br>
    <a href="{{route('home')}}">home </a>
    
    <table>
        <thead>
            <tr>
                <th>Doctor Name</th>
                <th>Phone Number</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Doctors as $doctor)
                <tr>
                    <td>{{ $doctor->doctor_name }}</td>
                    <td>{{ $doctor->phone_num }}</td>
                    <td>{{ $doctor->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <form action="{{route('add_doctor')}}" method="GET">
        <button type="submit">add doctor</button>
    </form>
</body>
</html>