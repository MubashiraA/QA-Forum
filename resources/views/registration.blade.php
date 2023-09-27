<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <form action="/login" method="post">
        @csrf
        <label for="">Username: </label>
        <input type="text" name="username" value="{{old('username')}}"><br>
        @error('username')
        <div>{{ $message }}</div>
        @enderror
        <label for="">Email: </label>
        <input type="email" name="email" value="{{old('email')}}"><br>
        @error('email')
        <div>{{ $message }}</div>
        @enderror
        <label for="">Password: </label>
        <input type="password" name="password"><br>
        @error('password')
        <div>{{ $message }}</div>
        @enderror
        <label for="">Confirm Password: </label>
        <input type="password" name="password_confirmation"><br>
        @error('confirm_password')
        <div>{{ $message }}</div>
        @enderror
        <button>Submit</button>
    </form>
</body>

</html>