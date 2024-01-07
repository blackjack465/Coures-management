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

    h1 {
            padding-top : 0.5cm;
        }
</style>

<h1>Edit Course</h1>

<form method="post" action="{{ route('course.update' , $course->id ) }}">
    @csrf
    @method('PUT')

    <label for="title">Course Title</label>
    <input type="text" name="title" value=" {{ $course->title }} " id="title" required>

    <label for="instructor">Instructor</label>
    <input type="text" name="instructor" value=" {{ $course->instructor }} " id="instructor" required>

    <label for="courseHead">Course Head</label>
    <input type="text" name="courseHead" value=" {{ $course->courseHead }} " id="courseHead" required>

    <button type="submit">Edit Course</button>
</form>

@endsection
