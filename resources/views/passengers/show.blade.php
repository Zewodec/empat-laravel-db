<!-- show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container mx-auto">
    <h1 class="text-3xl font-semibold text-center my-8">Passenger Details</h1>
    <div class="max-w-lg mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-4">
            <table class="table-auto w-full">
                <tr>
                    <td class="border px-4 py-2"><strong>First Name:</strong></td>
                    <td class="border px-4 py-2">{{ $passenger->first_name }}</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2"><strong>Last Name:</strong></td>
                    <td class="border px-4 py-2">{{ $passenger->last_name }}</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2"><strong>Contact Info:</strong></td>
                    <td class="border px-4 py-2">{{ $passenger->contact_info }}</td>
                </tr>

            </table>
        </div>
    </div>
</div>
</body>
</html>
