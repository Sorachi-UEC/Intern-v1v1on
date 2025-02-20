<!-- resources/views/todos/index.blade.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoリスト</title>
</head>
<body>

    <h1>ToDoリスト</h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <label for="title">ToDo:</label>
        <input type="text" id="title" name="title" required>
        <label for = "description">Description</label>
        <textarea id="description" name="descriptino">{{old('description')}}</textarea>
        
        @error('title')
            <p style="color:red;">{{$message}}</p>
        @enderror

        @error('description')
            <p style="color:red;">{{$message}}></p>
        @enderror
        <button type="submit">追加</button>
    </form>

    <ul>
        @foreach ($todos as $todo)
        <li>
            <strong>{{ $todo->title }}</strong><br>
            {{ $todo->description }} <!-- descriptionを表示 -->
            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">削除</button>
            </form>
        </li>
        @endforeach
    </ul>

</body>
</html>
