<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Concerts</title>
</head>
<body>
    <a href="{{ route('create') }}">Create a New Concert</a>

    <h1>List of Concerts</h1>

    <ul>
        @foreach ($concerts as $concert)
            <li>
                <strong>{{ $concert->name }}</strong><br>
                Date: {{ $concert->date }}<br>
                Venue: {{ $concert->venue }}
            </li>
        @endforeach
    </ul>
</body>
</html>