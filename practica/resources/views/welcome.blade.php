@extends('layouts.app')

@section('content')
<section class="container">
    <h1 class="my-4 text-center titulo">People</h1>

    <index-person :people="{{ $people }}" :country="{{ $country }}"></index-person>

</section>
@endsection
