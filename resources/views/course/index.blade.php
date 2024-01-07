@extends('layouts.app')

@section('content')
    <style>
        /* Table Styles */
        table {
            width: 95%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-left: 1cm; /* Adjust the left margin as needed */
            margin-right: 1cm; /* Adjust the right margin as needed */
        }

        h1 {
            padding-top: 0.5cm;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #86B6F6;
        }

        th {
            background-color: #176B87;
            color: #EEF5FF;
        }

        /* Alternate row background colors */
        tbody tr:nth-child(even) {
            background-color: #B4D4FF;
        }

        tbody tr:nth-child(odd) {
            background-color: #86B6F6;
        }

        /* Button Styles */
        .button-container a, .button-container form {
            display: inline-block;
            margin-left: 10px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button-container a, .button-container button {
            padding: 8px 12px;
        }

        .button-container a {
            background-color: #176B87; /* Dark Blue */
            color: #EEF5FF; /* Light Blue */
        }

        .button-container a:hover {
            background-color: #004262; /* Darker Blue on hover */
        }

        .button-container .delete-btn {
            background-color: #FF6961; /* Red */
            color: #FFFFFF; /* White text for better visibility */
            border-radius: 5px;
            transition: background-color 0.3s;
            border : 0px;
            padding: 8px 12px;
            margin-left: 10px;
        }

        .button-container .delete-btn:hover {
            background-color: #CC0000; /* Darker Red on hover */
        }
    </style>

    <h1>Courses</h1>
    <table>
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Instructor</th>
                <th>CourseHead</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->instructor }}</td>
                    <td>{{ $course->courseHead }}</td>
                    <td class="button-container">
                        <a href="{{ route('course.show', $course->id) }}">View</a>
                        <a href="{{ route('course.edit', $course->id) }}">Edit</a>

                        <!-- Form for the delete button -->
                        <form method="POST" action="{{ route('course.destroy', $course->id) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
