<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Create Page</title>
</head>

<body>
    <h1>Product Create</h1>

    <form action="{{route('users.products.store')}}" method="POST">
        @csrf
        @error('name')
        {{$message}}
        @enderror
        @error('price')
        {{$message}}
        @enderror
        <br>
        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="number" name="price" placeholder="Price"><br><br>
        <button type="submit">Submit</button>
    </form>
    <a href="{{route('welcome')}}">Home</a>
</body>

</html>