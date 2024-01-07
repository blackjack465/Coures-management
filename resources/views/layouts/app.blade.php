<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course App</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background-color: #176B87; /* Dark Blue */
            padding: 15px; /* Increased padding for a larger navbar */
            text-align: center;
            position: fixed;
            width: calc(100% - 2cm); /* Adjusted width to leave 1cm margin on each side */
            top: 0;
            z-index: 1000;
            margin: 0.5cm;
            border-radius: 15px; /* Rounded corners */
        }

        nav a {
            color: #EEF5FF; /* Light Blue */
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            padding: 10px 15px; /* Padding for better spacing and larger clickable area */
            border-radius: 8px; /* Rounded corners */
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #004262; /* Darker Blue on hover */
        }

        div.content-container {
            margin-top: 90px; /* Adjusted margin to prevent content from being hidden behind the fixed navbar */
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('course.index') }}">Home</a>
        <a href="{{ route('course.create') }}">Add Course</a>
    </nav>

    <div class="content-container">
        @yield('content')
    </div>
</body>
</html>
