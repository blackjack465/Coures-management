@extends('layouts.app')

@section('content')

<style>
    /* Form Styles */
    form {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #86B6F6;
        background-color: #EEF5FF;
        border-radius: 5px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #176B87;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 16px;
        border: 1px solid #B4D4FF;
        border-radius: 5px;
        box-sizing: border-box;
    }

    button {
        background-color: #176B87;
        color: #EEF5FF;
        padding: 12px 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

<h1>Add Course</h1>

<form method="post" action="{{ route('course.store') }}">
    @csrf

    <label for="title">Course Title</label>
    <input type="text" name="title" id="title" required>

    <label for="instructor">Instructor</label>
    <input type="text" name="instructor" id="instructor" required>

    <label for="courseHead">Course Head</label>
    <input type="text" name="courseHead" id="courseHead" required>

    <button type="submit">Add Course</button>
</form>

@endsection
