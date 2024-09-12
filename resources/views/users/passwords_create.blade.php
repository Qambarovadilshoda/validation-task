<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passwords Create Page</title>
</head>

<body>
    <h1>Password Create</h1>

    <form action="{{route('users.passwords.store')}}" method="POST">
        @csrf
        @error('confirm_password')
        {{$message}}
        @enderror
        <br>
        <input type="password" name="password" placeholder="Enter your password"><br><br>
        <input type="password" name="confirm_password" placeholder="Confirm your password"><br><br>
        <button type="submit">Submit</button>
    </form>
    <a href="{{route('welcome')}}">Home</a>
</body>

</html>