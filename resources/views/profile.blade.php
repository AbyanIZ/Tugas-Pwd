<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('frofil.css') }}">
</head>
<body>
    <div class="profile-container">
        <h1>Profile</h1>
        <div class="profile-picture">
            <img src="{{ asset('abc.jpg') }}" alt="Profile Picture">
        </div>
        <div class="profile-info">
            <div class="profile-item">
                <label>Username:</label>
                <input type="text" value="Mister Louis" readonly>
            </div>
            <div class="profile-item">
                <label>Password:</label>
                <input type="password" value="******" readonly>
            </div>
            <div class="profile-item">
                <button class="info-button">Film favorit</button>
            </div>
            <div class="profile-item">
                <button class="info-button">Film history</button>
            </div>
            <button class="logout-button">Logout</button>
        </div>
    </div>
</body>
</html>
