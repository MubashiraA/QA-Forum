<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Answers</title>
</head>

<body>
    <h2>Answers</h2><br>
    <label for="">Question: </label><br>
    <h3>{{$questions->question}}</h3><br>

    @if(!empty($questions->image))
    <label for=""> Image:</label><br>
    <h3><img src="{{ asset('storage/'.$questions->image) }}" style="height: 100px;width:100px;"></h3><br>
    @endif

    <label for="">Answer: </label><br>

    @foreach ($answers as $answer)
    <h3>{{$answer->answers}}</h3><br>

    @if(!empty($answer->image))
    <label for=""> Image:</label><br>
    <h3><img src="{{ asset('storage/'.$answer->image) }}" style="height: 100px;width:100px;"></h3><br>
    @endif
    
    @endforeach

</body>

</html>