@extends('layouts.app')

@section('content')
<section class="container">
    <h1 class="my-4 text-center titulo">Son</h1>

    <edit-son :son="{{ $son }}"></edit-son>
</section>
@endsection
