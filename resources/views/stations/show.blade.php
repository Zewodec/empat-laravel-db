<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Station Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container mx-auto">
    <div class="bg-white rounded-lg shadow-md p-8">
        <h1 class="text-3xl font-semibold mb-4">Station Details</h1>
        <div class="grid grid-cols-1 gap-4">
            <div>
                <strong>Station:</strong> {{ $station->name }}
            </div>
            <div>
                <strong>Location:</strong> {{ $station->geo_location }}
            </div>

        </div>
    </div>
</div>
</body>
</html>
