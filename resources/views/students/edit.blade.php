@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit page</div>
    <div class="card-body">
        <form action="{{ url('students/' .$students->id )}}" method="post">{!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$students->id}}">
            <label for="">Name</label><br>
             <input type="text" name="id" id="id" value="{{$students->name}}" class="form-control">
            <label for="">Address</label><br>
             <input type="text" name="id" id="id" value="{{$students->address}}" class="form-control">
            <label for="">Mobile</label><br>
            <input type="text" name="id" id="id" value="{{$students->mobile}}" class="form-control">
<input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    </div>
</div>
@stop