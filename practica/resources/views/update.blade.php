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
        <a class="navbar-brand" href="/">People</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <section class="container">
        <h1 class="my-4 text-center">People</h1>
        <form class="form" action="{{route('person.update_data', $person->id)}}" method="post">
            @csrf
            <div class="form-group">
                <div class="col-md-12">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" value="{{ $person->name }}">
                </div>
                <div class="col-md-12">
                    <label>Last Name</label>
                    <input class="form-control" type="text" name="lastName" value="{{ $person->lastName }}">
                </div>
                <div class="col-md-12">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" value="{{ $person->email }}">
                </div>
                <div class="col-md-12">
                    <label>Phone</label>
                    <input class="form-control" type="number" name="phone" value="{{ $person->phone }}">
                </div>
                <div class="col-md-12">
                    <label>Neighborhood</label>
                    <input class="form-control" type="text" name="neighborhood" value="{{ $person->neighborhood }}">
                </div>
                <div class="col-md-12 mt-4 text-center">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
