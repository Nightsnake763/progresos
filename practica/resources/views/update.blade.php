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
        <div>
            <form action="{{ route('person.addSon', $person->id) }}" method="post">
                @csrf
                <label class="text-white">Name</label>
                <input type="text" name="name">
                <label class="text-white">Age</label>
                <input type="number" name="age">
                <button class="btn btn-primary" type="submit">Add Son</button>
            </form>
        </div>
    </nav>

    <section class="container">
        <h1 class="my-4 text-center">People</h1>
        <form class="form" method="post" action="{{ route('person.update_data', $person->id) }}">
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
                <div class="col-md-12">
                    <label>Country</label>
                    <select name="country_id" class="btn btn-outline-light text-dark form-control">
                        @foreach($country as $c)
                            <option class="btn btn-outline-light text-dark" value="{{ $c->id }}">{{ $c->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12 mt-4 text-center">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
        </form>
        <table  class="table table-striped mt-4">
            <thead>
                <th>Name</th>
                <th>Age</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach($person->sons as $element)
                    <tr>
                        <td>{{ $element->name }}</td>
                        <td>{{ $element->age }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('son.update', $element->id) }}">Edit</a>
                            <a class="btn btn-primary" href="{{ route('son.delete', $element->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>
