<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>

<body>
<a href="/login/create">Registration</a><br>
<a href="/questions/create">Question</a><br><br>
    <table>
        <tr>
            <th>Id</th>
            <th>Questions</th>
            <th>Category</th>
            <th>Image</th>
        </tr>
        @foreach ($questions as $question)
        <tr>
            <td>{{$question->id}}</td>
            <td>{{ $question->question}}</td>
            <td>{{ $question->name}}
                {{-- {{$categories[$question->category]}} --}}

            </td>
            <td>
                @if($question->image)
                <img src="{{ asset('storage/'.$question->image) }}" style="height: 100px;width:100px;">
                @else
                <span>No image found!</span>
                @endif
            </td>
            <td><a href="/questions/{{$question->id}}"><button>View</button></a></td>
            <td><a href="/questions/{{$question->id}}/edit"><button>Edit</button></a></td>
            <td>
                <form action="/questions/{{$question->id}}" method="post">
                    @method('delete')
                    @csrf
                    <button>Delete</button>
                </form>
            </td>
            <td><a href="/post-answer/{{$question->id}}"><button>Add Answers</button></a></td>
            <td><a href="/view-answer/{{$question->id}}"><button>View Answers</button></a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>