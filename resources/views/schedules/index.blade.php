<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedules</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container mx-auto">
    <h1 class="text-3xl font-semibold text-center my-8">List of Schedules</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($schedules as $schedule)
            <div class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg">
                <a href="{{ route('schedules.show', $schedule->id) }}"
                   class="font-semibold text-xl mb-2 text-blue-600 hover:underline">
                    Schedule ID: {{ $schedule->id }}
                </a>
                <p>{{ $schedule->departure_time }}</p>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
