<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Create Page</title>
</head>

<body>
    <h1>Date Create</h1>
    <form action="{{route('users.dates.store')}}" method="POST">
        @csrf
        @error('date')
        {{$message}}
        @enderror
        <br>
        <input type="date" name="date">
        <button type="submit">Submit</button>
    </form>
    <a href="{{route('welcome')}}">Home</a>
</body>

</html>