@extends('layouts.app')

@section('header')
    <div class="flex items-center space-x-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ToDoList Edit') }}
        </h2>
    </div>
@endsection

@section('content')




<form action="{{ route('todos.update', $todo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="border p-2 w-full rounded h-8" value="{{ old('title', $todo->title) }}">
    </div>

    <div class="mb-4">
        <label for="description">Description</label>
        <textarea id="description" name="description" class="border p-2 w-full rounded h-32">{{old('description', $todo->description)}}</textarea>
    </div>

    <button style="background-color: #ffcc99" class="hover:bg-orange-300 text-black py-1 px-3 rounded" type="submit">Update</button>
</form>

@endsection
