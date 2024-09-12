<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Create</title>
</head>

<body>
    <h1>User Create</h1>
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        @error('name')
        {{$message }}
        @enderror
        @error('age')
        {{$message }}
        @enderror
        @error('email')
        {{$message}}
        @enderror
        <br>
        <input type="text" name="name" placeholder="Enter your name"><br><br>
        <input type="number" name="age" placeholder="Enter your age"><br><br>
        <input type="email" name="email" placeholder="Enter your email"><br><br>
        <button type="submit">Submit</button>
    </form>
    <a href="{{route('welcome')}}">Home</a>
</body>

</html>