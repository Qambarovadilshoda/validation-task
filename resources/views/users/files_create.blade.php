<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Create Page</title>
</head>

<body>

    <h1>Create File</h1>

    <form action="{{route('users.files.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @error('photo')
        {{$message}}
        @enderror
        <br>
        <input type="file" name="photo"><br><br>
        <button type="submit">Submit</button>

    </form>
    <a href="{{route('welcome')}}">Home</a>
</body>

</html>