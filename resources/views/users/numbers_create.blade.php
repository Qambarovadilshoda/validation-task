<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Create Page</title>
</head>
<body>
    <h1>Age Create</h1>

    <form action="{{route('users.numbers.store')}}" method="POST">
        @csrf
        @error('age')
            {{$message}}
        @enderror
        <br>
        <input type="number" name="age"placeholder="Enter your age"><br><br>
        <button type="submit">Submit</button>
    </form>
    <a href="{{route('welcome')}}">Home</a>
</body>
</html>
