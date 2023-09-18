<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Question</title>
</head>

<body>
    Question :{{$question->question}} <br>
    Category :{{$category}} <br>
    Image :  <img src="{{ asset('storage/'.$question->image) }}" style="height: 100px;width:100px;">

</body>

</html>