<!DOCTYPE html>
<html>
<head>
    <title>Our Programs</title>
</head>
<body>
    <h1>Our Programs {{ $type ? '- ' . ucfirst($type) : '' }}</h1>
    
    <h3>Available Programs:</h3>
    <ul>
        @foreach($programs as $program)
            <li>{{ $program }}</li>
        @endforeach
    </ul>
    
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('team') }}">Our Team</a> |
        <a href="{{ route('contact') }}">Contact Us</a>
    </nav>
    
    <h3>Filter by Type:</h3>
    <ul>
        <li><a href="{{ route('program', ['type' => 'bootcamp']) }}">Bootcamps</a></li>
        <li><a href="{{ route('program', ['type' => 'workshop']) }}">Workshops</a></li>
        <li><a href="{{ route('program', ['type' => 'course']) }}">Courses</a></li>
    </ul>
</body>
</html>