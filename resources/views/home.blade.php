<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome to Our project</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <nav>
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('program') }}">program</a> |
        <a href="{{ route('team') }}">Our Team</a> |
        <a href="{{ route('contact') }}">Contact Us</a>
    </nav>
</body>
</html>