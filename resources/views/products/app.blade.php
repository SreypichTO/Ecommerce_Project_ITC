<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
        }

        .navbar a.btn {
            margin-right: 10px;
        }

        .d-flex {
            margin-top: 20px;
        }

        @media only screen and (max-width: 600px) {
            .d-flex {
                flex-direction: column;
                align-items: center;
            }

            .navbar a.btn {
                margin-bottom: 10px;
                width: 100%;
            }
        }
    </style>
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex justify-content-center mb-2">
        <nav class="navbar navbar-light bg-light">
            <a href="{{ route('products.show') }}" class="btn btn-primary">Show All</a>
            <a href="{{ route('products.create') }}" class="btn btn-primary">Create New</a>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    @yield('content')
</body>

</html>
