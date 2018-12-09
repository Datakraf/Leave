@extends('backend.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Leave Type</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                @include('leave::type.partials.list')
            </div>
            <div class="col">
                @include('leave::type.forms.create')
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-js')
@endsection
