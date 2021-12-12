<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="col-md-6">
            <a class="navbar-brand" href="/">People</a>
        </div>
    </nav>

    <section class="container">
        <h1 class="my-4 text-center">Son</h1>
        <form class="form" method="post" action="{{ route('son.update_data', $son->id) }}">
            @csrf
            <div class="form-group">
                <div class="col-md-12">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" value="{{ $son->name }}">
                </div>
                <div class="col-md-12">
                    <label>Age</label>
                    <input class="form-control" type="text" name="age" value="{{ $son->age }}">
                </div>
                <div class="col-md-12 mt-4 text-center">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
