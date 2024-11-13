<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
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
        .user-block h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #007BFF;
        }
        .user-block h2 {
            font-size: 20px;
            margin-top: 20px;
            color: #555;
        }
        .user-block p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 8px;
        }
        .profile-info {
            background-color: #f4f4f4;
            padding: 15px;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        .profile-info p {
            font-size: 14px;
            margin-bottom: 6px;
        }
        .profile-info strong {
            color: #555;
        }
        .hr-separator {
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }
        .no-profile {
            background-color: #ffcccc;
            padding: 10px;
            border-radius: 5px;
            color: #d9534f;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <hr class="hr-separator">
        <h1>User Model to Profile Information</h1>
        
        @foreach ($users as $user)
        <div class="user-block">
            <h1>User Information</h1>
            <p><strong>User Id:</strong> {{ $user->id }}</p>
            <p><strong>User Name:</strong> {{ $user->name }}</p>
            <p><strong>User Email:</strong> {{ $user->email }}</p>
            <p><strong>User Created:</strong> {{ $user->created_at }}</p>
            <p><strong>User Updated:</strong> {{ $user->updated_at }}</p>

            <h2>Profile</h2>
            @if($user->profile)
                <div class="profile-info">
                    <p><strong>Profile Id:</strong> {{ $user->profile->id }}</p>
                    <p><strong>User Id:</strong> {{ $user->profile->user_id }}</p>
                    <p><strong>Profile Bio:</strong> {{ $user->profile->bio }}</p>
                    <p><strong>Profile Created:</strong> {{ $user->profile->created_at }}</p>
                    <p><strong>Profile Updated:</strong> {{ $user->profile->updated_at }}</p>
                </div>
            @else
                <div class="no-profile">
                    <p>No profile found for this user.</p>
                </div>
            @endif
        </div>
        <hr class="hr-separator">
        @endforeach
    </div>

</body>
</html>
