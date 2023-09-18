<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddQuestion</title>
</head>
<body>
    <form action="/questions" method="post" enctype="multipart/form-data">
        @csrf
        <h2>Add Your Question</h2><br>
        <label for="">Question: </label><br>
        <textarea name="question" id="" cols="30" rows="10">{{old('question')}}</textarea><br>
        @error('question')
        <div>{{ $message }}</div>
        @enderror
        <label for="">Category: </label>
        <select name="category" id="">
            <option value="">Select Category</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">
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