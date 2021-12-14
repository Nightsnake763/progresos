@extends('layouts.app')

@section('content')
<section class="container">
    <div>
        <a type="button" data-toggle="modal" data-target="#sonModal" class="col-12 text-decoration-none">
            <h1 class="text-center">People</h1>
        </a>
    </div>
    <div>
        <form-people :country="{{ $country }}"></form-people>
    </div>
    <div>
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
    </div>
    <div class="modal fade" id="sonModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form role="form" action="{{ route('person.addSon', $person->id) }}" method="post">
                        @csrf
                        <div>
                            <Label><h1>Ojala funcionara</h1></Label>
                        </div>
                        <div>
                            <label>Name</label>
                            <input class="form-control" type="text">
                        </div>
                        <div>
                            <label>Age</label>
                            <input class="form-control" type="number">
                        </div>
                        <button class="btn btn-primary text-center mt-4" type="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
