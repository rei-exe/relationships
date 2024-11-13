<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>

    <h2>{{$user->name}}'s Profile</h2>
    <div>Bio: {{$user->profile->bio}}</div>
    <div>Address: {{$user->profile->address}}</div>
    
</body>
</html>