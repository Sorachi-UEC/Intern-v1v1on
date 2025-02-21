<!DOCTYPE html>
<html>
<head>
    <title>ToDo 編集</title>
</head>
<body>

<h2>ToDo 編集</h2>



<form action="{{ route('todos.update', $todo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="title">title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $todo->title) }}">
    </div>

    <div class="mb-4">
        <label for="title">title</label>
        <textarea id="description" name="description" rows="3" col="15">{{old('description', $todo->description)}}</textarea>
    </div>

    <button type="submit">更新</button>
</form>

</body>
</html>