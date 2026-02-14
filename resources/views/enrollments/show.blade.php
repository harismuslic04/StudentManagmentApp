@extends('layout')
@section('content')
<div class="card">
<div class="card header">entrollments Page</div>
<div class="card body">
    <div class="card-body">
        <h5 class="card-title">Name : {{ $entrollments->entroll_no}}</h5>
        <p class="card-text">Address : {{$entrollments->batch_id}}</p>
        <p class="card-text">Mobile : {{$entrollments->student_id}}</p>
        <p class="card-text">Mobile : {{$entrollments->join_date}}</p>
        <p class="card-text">Mobile : {{$entrollments->fee}}</p>
    </div>
</hr>
</div>
</div>
@endsection