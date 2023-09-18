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
    </tr>
    @endforeach
</table>