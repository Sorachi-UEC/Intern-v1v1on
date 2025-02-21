@extends('layouts.app')

@section('header')
    <div class="flex items-center space-x-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ToDoList Index') }}
        </h2>
    </div>
@endsection

@section('content')

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <label for="title" class="block text-lg font-bold text-gray-800">Title:</label>
        <input type="text" id="title" name="title" class="border p-2 w-full rounded h-8" required>
        <label for="description" class="block text-lg font-bold text-gray-800">Description</label>
        <textarea id="description" name="description" class="border p-2 w-full rounded h-32">{{old('description')}}</textarea>
    
        @error('title')
            <p style="color:red;">{{$message}}</p>
        @enderror

        @error('description')
            <p style="color:red;">{{$message}}</p>
        @enderror
        <button style="background-color:rgb(198, 249, 214)" class="hover:bg-orange-300 text-black py-1 px-4 rounded" type="submit">Add</button>
    </form>

    <ul>
        @foreach ($todos as $todo)
        <li class="block p-4 bg-white border-l-4 border-blue-500 rounded-lg shadow-md mb-4">
            <div class="p-4 bg-gray-100 rounded-lg shadow-md mb-4">
            <strong>{{ $todo->title }}</strong><br>
            {{$todo->description}} <!-- descriptionを表示 -->
            </div>
            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button button style="background-color:rgb(238, 250, 168)" class="hover:bg-yellow-300 text-black py-0.6 px-2 rounded" type="submit">Completed</button>
            </form>

                <!-- 編集ボタン -->
            <a href="{{ route('todos.edit', $todo->id) }}">
            <button button style="background-color:rgb(251, 217, 183)" class="hover:bg-orange-300 text-black py-0.6 px-2 rounded">
                Edit
            </button>
        </a>
        </li>
        @endforeach
    </ul>

@endsection
