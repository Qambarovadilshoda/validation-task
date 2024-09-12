<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Url Create Page</title>
</head>

<body>
    <h1>URL Create</h1>

    <form action="{{route('users.urls.store')}}" method="POST">
        @csrf
        @error('url')
            {{$message}}
        @enderror
        <br>
        <input type="url" name="url" placeholder="Enter URL"><br><br>
        <button type="submit">Submit</button>
    </form>
    <a href="{{route('welcome')}}">Home</a>
</body>

</html>