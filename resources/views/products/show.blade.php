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
        .header {
            text-align: center;
            background-color: #007bff;
            padding: 10px;
            color: #fff;
            font-size: 24px;
        }

        .navbar {
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .navbar a.btn {
            margin-right: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        .table img {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
        }

        .table td {
            vertical-align: middle;
        }

        .table .btn {
            margin-right: 5px;
        }

        @media only screen and (max-width: 600px) {
            .navbar a.btn {
                margin-bottom: 10px;
                width: 100%;
            }
        }
    </style>
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="header">
        <h1>SHOES-SHOP</h1>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->category}}</td>
                <td>{{$item->brand}}</td>
                <td>${{$item->price}}</td>
                <td>{{$item->description}}</td>
                <td>
                    <img src="{{ asset("" .$item-> image) }} " width="100px" alt="">
                </td>
                <td>
                    <a href="{{ route ("products.edit", $item->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route ("products.delete", $item->id) }}" onclick="return confirm('Are you sure?')"
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        <nav class="navbar navbar-light bg-light">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Create New Product</a>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

</body>

</html>
