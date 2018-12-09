@extends('backend.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="cad-title">Employees List</h3>
    </div>
    <div class="card-body">
        @include('components.table.table',['columnHeaders'=>$userColumnHeaders,'results'=>$userResults,'rows'=>$userRows,'actions'=>$actions])
    </div>
</div>
<!-- user records -->

@endsection
