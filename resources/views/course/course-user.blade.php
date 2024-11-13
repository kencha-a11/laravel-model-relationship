<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses and Users</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .course-block {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        .course-block h2 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #007BFF;
        }
        .course-block h3 {
            font-size: 18px;
            color: #555;
        }
        .course-block h4 {
            font-size: 16px;
            color: #555;
        }
        .course-block p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 8px;
        }
        .user-info {
            background-color: #f4f4f4;
            padding: 10px;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        .user-info li {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 6px;
        }
        .user-info li strong {
            color: #007BFF;
        }
        .hr-separator {
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Courses and Their Users</h1>
        <hr class="hr-separator">

        @foreach ($courses as $courseName => $courseRecords)
        <div class="course-block">
            <h2>Course: {{ $courseName }}</h2>
            <hr>
            
            @foreach ($courseRecords as $course)
                <div style="margin-top: 10px;">
                    <h3>Course ID: {{ $course['id'] }} - {{ $course['course'] }}</h3>
                    <p><strong>Created At:</strong> {{ $course['created_at'] }}</p>

                    <h4>Enrolled Users:</h4>
                    <div class="user-info">
                        <ul>
                            <li>
                                <strong>{{ $course['user']['name'] }}</strong> ({{ $course['user']['email'] }})
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
        @endforeach
    </div>

</body>
</html>
