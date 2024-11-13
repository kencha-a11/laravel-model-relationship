<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiles</title>
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
        .profile-block {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        .profile-block h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #007BFF;
        }
        .profile-block h2 {
            font-size: 20px;
            margin-top: 20px;
            color: #555;
        }
        .profile-block p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 8px;
        }
        .user-info {
            background-color: #f4f4f4;
            padding: 15px;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        .user-info p {
            font-size: 14px;
            margin-bottom: 6px;
        }
        .user-info strong {
            color: #555;
        }
        .hr-separator {
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <hr class="hr-separator">
        <h1>Profile Model to User Information</h1>
        
        @foreach ($profiles as $profile)
        <div class="profile-block">
            <h1>Profile Information</h1>
            <p><strong>Profile Id:</strong> {{ $profile->id }}</p>
            <p><strong>User Id:</strong> {{ $profile->user_id }}</p>
            <p><strong>Profile Bio:</strong> {{ $profile->bio }}</p>
            <p><strong>Profile Created:</strong> {{ $profile->created_at }}</p>
            <p><strong>Profile Updated:</strong> {{ $profile->updated_at }}</p>

            <h2>User Information</h2>
            <div class="user-info">
                <p><strong>User Id:</strong> {{ $profile->user->id }}</p>
                <p><strong>User Name:</strong> {{ $profile->user->name }}</p>
                <p><strong>User Email:</strong> {{ $profile->user->email }}</p>
                <p><strong>User Created:</strong> {{ $profile->user->created_at }}</p>
                <p><strong>User Updated:</strong> {{ $profile->user->updated_at }}</p>
            </div>
        </div>
        <hr class="hr-separator">
        @endforeach
    </div>

</body>
</html>
