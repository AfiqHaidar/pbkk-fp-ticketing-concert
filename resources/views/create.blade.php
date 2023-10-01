<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Concert</title>
</head>
<body>
    <h1>Create a New Concert</h1>

    <form method="POST" action="/concerts">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="{{ old('date') }}" required>

        <label for="venue">Venue:</label>
        <input type="text" id="venue" name="venue" value="{{ old('venue') }}" required>

        <button type="submit">Create Concert</button>
    </form>
</body>
</html>