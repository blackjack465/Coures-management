@extends('layouts.app')

@section('content')
	<style>
    /* Table Styles */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
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
</style>

<h1>
	Courses
</h1>
<table>
<thead>
		<tr>
			<th>Course Name</th>
			<th>Instructor</th>
		</tr>
</thead>

<tbody>
	@foreach($courses as $course)
		<tr>
			<td> {{ $course->title }} </td>
			<td> {{ $course->instructor }} </td>
		</tr>

	@endforeach
</tbody>
</table>

@endsection