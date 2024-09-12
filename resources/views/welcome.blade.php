<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <h1>Tasks</h1>
    <ul>
        <li><a href="{{route('users.create')}}">User Create</a></li>
        <li><a href="{{route('users.files.create')}}">File Create</a></li>
        <li><a href="{{route('users.products.create')}}">Create Productr</a></li>
        <li><a href="{{route('users.dates.create')}}">Date</a></li>
        <li><a href="{{route('users.passwords.create')}}">Confirm Password</a></li>
        <li><a href="{{route('users.urls.create')}}">URL</a></li>
        <li><a href="{{route('users.numbers.create')}}">Numeric</a></li>
    </ul>
</body>

</html>