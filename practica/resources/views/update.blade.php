@extends('layouts.app')

@section('content')
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
@endsection
