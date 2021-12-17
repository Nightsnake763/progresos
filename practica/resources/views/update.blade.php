@extends('layouts.app')

@section('content')
<section class="container">
    <div>
        <h1 class="text-center">People</h1>
    </div>
    <div>
        <edit-person :person="{{ $person }}" :country="{{ $country }}" :sons="{{ $person->sons }}" />
    </div>
</section>
@endsection
