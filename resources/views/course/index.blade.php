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
            padding-top : 0.5cm;
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
        .button-container a {
            display: inline-block;
            margin-left: 10px;
            padding: 8px 12px;
            text-decoration: none;
            background-color: #176B87; /* Dark Blue */
            color: #EEF5FF; /* Light Blue */
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button-container a:hover {
            background-color: #004262; /* Darker Blue on hover */
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
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
