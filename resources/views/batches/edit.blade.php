@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit page</div>
    <div class="card-body">
        <form action="{{ url('batches/' .$batches->id )}}" method="post">{!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$batches->id}}">
            <label for="">Name</label><br>
             <input type="text" name="id" id="id" value="{{$batches->name}}" class="form-control">
            <label for="">Course</label><br>
             <input type="text" name="course_id" id="id" value="{{$batches->course_id}}" class="form-control">
            <label for="">Start dat</label><br>
            <input type="text" name="start_date" id="id" value="{{$batches->start_date}}" class="form-control">
<input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    </div>
</div>
@stop