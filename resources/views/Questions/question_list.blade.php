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
    </tr>
    @endforeach
</table>