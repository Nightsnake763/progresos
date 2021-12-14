@extends('layouts.app')

@section('content')
<section class="container">
    <h1 class="my-4 text-center titulo">People</h1>
    <div>
        <form-people :country="{{ $country }}"></form-people>
    </div>
    <div>
       <table-people :people="{{ $people }}" :country="{{ $country }}"></table>
    </div>
    @stack('js')
</section>
@endsection
