<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER PROFILES</title>
</head>
<body>
    <h1>User Profiles</h1>

    @foreach ($users as $user)
        <div>UID: {{$user->id}}</div>
        <div>Name: {{$user->name}}</div>
        <div>Address: {{$user->address}}</div>
        <div>Email: {{$user->email}}</div>
       
        <br>
    @endforeach
    
</body>
</html>