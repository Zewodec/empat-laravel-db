<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container mx-auto">
    <div class="bg-white rounded-lg shadow-md p-8">
        <h1 class="text-3xl font-semibold mb-4">Reservation Details</h1>
        <div class="grid grid-cols-1 gap-4">
            <div>
                <strong>Reservation ID:</strong> {{ $reservation->id }}
            </div>
            <div>
                <strong>Status:</strong> {{ $reservation->reservation_status }}
            </div>
            <div>
                <strong>seat_number:</strong> {{ $reservation->seat_number }}
            </div>
            <div>
                <strong>passenger_id:</strong> {{ $reservation->passenger_id }}
            </div>
            <div>
                <strong>train_id:</strong> {{ $reservation->train_id }}
            </div>


        </div>
    </div>
</div>
</body>
</html>
