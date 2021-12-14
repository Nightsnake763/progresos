@extends('layouts.app')

@section('content')
<section class="container">
    <h1 class="my-4 text-center titulo">People</h1>

    <form-people :country="{{ $country }}"></form-people>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Neighborhood</th>
                <th>Country</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($people as $person)
                <tr>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->lastName }}</td>
                    <td>{{ $person->email }}</td>
                    <td>{{ $person->phone }}</td>
                    <td>{{ $person->neighborhood }}</td>
                    <td>{{ $country[$person->country_id-1]->name}}</td>
                    <td>
                        <a href="{{ route('person.update', $person->id) }}" class="btn btn-warning text-white">Edit</a>
                        <a href="{{ route('person.delete', $person->id) }}" class="btn btn-danger text-white">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
