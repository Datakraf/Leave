@extends('backend.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Leave Application Form</h3>
    </div>
    <div class="card-body">
        @include('leave::leave.forms.apply')                
    </div>
</div>
@endsection
