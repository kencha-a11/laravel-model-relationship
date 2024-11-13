<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Courses</title>
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
        .user-block {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        .user-block h2 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #007BFF;
        }
        .user-block h3 {
            font-size: 18px;
            color: #555;
        }
        .user-block p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 8px;
        }
        .course-list {
            background-color: #f4f4f4;
            padding: 15px;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        .course-list li {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        .course-list li strong {
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
        <h1>User List with Courses</h1>
        <hr class="hr-separator">
        
        @foreach ($users as $user)
        <div class="user-block">
            <h2>{{ $user->name }} ({{ $user->email }})</h2>
            <p><strong>Created At:</strong> {{ $user->created_at }}</p>
            
            <h3>Courses:</h3>
            <div class="course-list">
                <ul>
                    @foreach ($user->courses as $course)
                        <li>
                            <strong>{{ $course->course }}</strong> (Course ID: {{ $course->id }})
                            <br>
                            Created At: {{ $course->created_at }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <hr class="hr-separator">
        @endforeach
    </div>

</body>
</html>
