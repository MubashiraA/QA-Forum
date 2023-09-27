<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddAnswer</title>
</head>
<body>
    <form action="/answers" method="post" enctype="multipart/form-data">
        @csrf
        <h2>Add Your Answer</h2><br>
        <label for="">Question: </label><br>
        <h3></h3><br>
        <label for="">Answer: </label><br>
        <textarea name="answer" id="" cols="30" rows="10">{{old('answer')}}</textarea><br>
        @error('answer')
        <div>{{ $message }}</div>
        @enderror
        <label for="">Image: </label>
        <input type="file" name="image"><br>
        @error('image')
        <div>{{ $message }}</div>
        @enderror
        <button type="submit">Submit</button>
    </form>
</body>
</html>