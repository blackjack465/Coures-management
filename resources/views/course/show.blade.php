@extends('layouts.app')

@section('content')

<style>
    /* Custom CSS for the page */
    body {
        background-color: #EEF5FF; /* Light Blue */
        color: #176B87; /* Dark Blue */
        font-family: 'Arial', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    h2 {
        color: #176B87; /* Dark Blue */
        font-size: 1.5em; /* Larger font size for h2 */
    }

    /* Styling specific to the content */
    .course-info {
        max-width: 20cm;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        text-align: left;
    }

    td {
        padding: 10px;
    }

</style>

<div class="course-info">
    <h2>Information about the course selected</h2>

    <table>
        <tr>
            <td><label><b>Title : </b></label></td>
            <td>{{ $course->title }}</td>
        </tr>
        <tr>
            <td><label><b>Instructor : </b></label></td>
            <td>{{ $course->instructor }}</td>
        </tr>
        <tr>
            <td><label><b>CourseHead : </b></label></td>
            <td>{{ $course->courseHead }}</td>
        </tr>
    </table>

</div>

@endsection
