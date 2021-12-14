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
        <table-son :sons="{{ $person->sons }}" :person="{{ $person }}" ></table>
    </div>
    <div>
        <div class="modal fade" id="sonModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form-son></form-son>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
