<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Maintenance System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Full-page background styling */
        body {
            background: url('{{ asset('images/background_image.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            color: #fff;
        }

        /* Overlay to enhance text readability */
        .overlay {
            background: rgba(20, 15, 14, 0.5);
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        /* Centered content container */
        .content {
            position: relative;
            z-index: 2;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
        }

        .btn-custom {
            background-color: black;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            color: #fff;
            font-size: 16px;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            color: #fff;
        }
    </style>
</head>
<body>
<!-- Dark overlay -->
<div class="overlay"></div>

<!-- Main content -->
<div class="content">
    <h2 class="display-2">VehiTrack</h2>
    <h3 class="display-6">Welcome to the Vehicle Maintenance System</h3>
    <p class="lead">Effortlessly manage and track vehicle maintenance.</p>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-custom mt-3">Get Started !</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
