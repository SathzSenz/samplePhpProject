<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 25%;
            background-color: #f8f9fa;
            padding-top: 20px;
            z-index: 1000;
        }

        .main-content {
            margin-left: 20%;
            padding: 20px;
        }


        .header {
            margin-left: 15%;
            padding: 10px;
            background-color: rgba(217, 217, 218, 0.8);
            z-index: 999;
            position: relative;
            width: 100%;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .main-content {
                margin-left: 0;
            }

            .header {
                margin-left: 0;
                width: 100%;
            }
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        @include('components.sidebar')
        @include('components.header')
        <div class="col-md-9 col-12 main-content">
            <h2 class="text-center mb-4">Vehicle Maintenance System</h2>
            @yield('content')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
