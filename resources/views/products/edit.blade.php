<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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

        .container {
            max-width: 600px;
            margin: 0px auto;
            margin-top: 80px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #007bff;
        }

        form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        input[type="file"] {
            border: none;
            padding: 0;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>SHOES-SHOP</h1>
    </div>
    <div class="container">
        <h3>Edit Product</h3>
        <form action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" method="POST">
            @csrf 
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{$product->title}}">
                @error('title')
                <span class="text-danger">{{ $message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <select class="form-select" aria-label="Default select example" name="category" value="{{old('title')}}">
                    <option value="MEN">MEN</option>
                    <option value="WOMEN">WOMEN</option>
                    <option value="KIDS">KIDS</option>
                </select>
                @error('category')
                <span class="text-danger">{{ $message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <select class="form-select" aria-label="Default select example" name="brand">
                    <option value="MEN" {{ old('brand') == 'MEN' ? 'selected' : '' }}>NIKE</option>
                    <option value="WOMEN" {{ old('brand') == 'WOMEN' ? 'selected' : '' }}>ADIDAS</option>
                    <option value="KIDS" {{ old('brand') == 'KIDS' ? 'selected' : '' }}>CROCS</option>
                </select>
                @error('brand')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="price" placeholder="($) Price in US" value="{{$product->price}}">
                @error('price')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <textarea class="form-control" name="description" cols="30" rows="10" placeholder="Description....">{{$product->description}}</textarea>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="image" id="image">
                @error('image')
                <span class="text-danger">{{ $message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <img src="{{ asset("uploads/" . $product-> image) }} " alt="">
            </div>
            <div class="form-group-btn">
                <a href="{{ route('products.show') }}" class="btn btn-primary">Back</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
    </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>