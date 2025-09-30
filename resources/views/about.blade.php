<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
</head>
<body>
    <h1>About Us {{ $section ? '- ' . ucfirst($section) : '' }}</h1>
    <p>{{ $content }}</p>
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('program') }}">Program</a> |
        <a href="{{ route('team') }}">Our Team</a> |
        <a href="{{ route('contact') }}">Contact Us</a>
    </nav>
</body>
</html>