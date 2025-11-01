<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f7fa;
            margin: 0;
            padding: 0;
        }

        h1, h2 {
            text-align: center;
            color: #333;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        }

        .card h3 {
            margin-top: 0;
            color: #007bff;
        }

        .card p {
            margin: 8px 0;
            color: #555;
        }

        .card span {
            font-weight: bold;
            color: #333;
        }

        @media (max-width: 600px) {
            .card-container {
                grid-template-columns: 1fr;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    @include('layouts.navbar')
    
    <h1>Welcome</h1>
    <h2>User Data</h2>

    <div class="card-container" >
        @foreach ($users as $user)
        <div class="card" onclick="">
            <h3>{{ $user->name }}</h3>
            <p><span>Email:</span> {{ $user->email }}</p>
            <p><span>Age:</span> {{ $user->age }}</p>
            <p><span>Country:</span> {{ $user->country }}</p>
            <p><span>User ID:</span> {{ $user->id }}</p>
        </div>
        @endforeach
    </div>

</body>
</html>
