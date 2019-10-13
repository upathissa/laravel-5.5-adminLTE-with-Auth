@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            @include('pages.candidate.subs.createForm');
        </div>
    </div>
</div>
@endsection
