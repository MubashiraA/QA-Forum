<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Question</title>
</head>
<body>
    <form action="/questions/{{$question->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <h2>Add Your Question</h2><br>
        <label for="">Question: </label><br>
        <textarea name="question" id="" cols="30" rows="10">{{$question->question}}</textarea><br>
        @error('question')
        <div>{{ $message }}</div>
        @enderror
        <label for="">Category: </label>
        <select name="category" id="">
            <option value="">Select option</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}" @if ($question->category == $category->id) selected @endif>
                {{$category->name}}
            </option>
            @endforeach
        </select><br>
        @error('category')
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