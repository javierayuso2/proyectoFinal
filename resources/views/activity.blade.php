<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
</head>
<body>
    <h1>Activity</h1>
    <form action="{{ route('save.activity') }}" method="POST">
        @csrf
        <select name="activity_id">
            @foreach ($activities as $activity)
                <option value="{{ $activity->id }}">{{ $activity->name }}</option>
            @endforeach
        </select>
        @foreach ($emotions as $emotion)
            <label>
                <input type="radio" name="emotion_state_id" value="{{ $emotion->id }}">
                <img src="{{ $emotion->image }}" alt="{{ $emotion->name }}">
            </label>
        @endforeach
        <button type="submit">Save</button>
    </form>

    <!-- Agrega el botón de resumen -->
    <a href="{{ route('activity.summary') }}" class="btn btn-primary">Resumen</a>
</body>
</html>
