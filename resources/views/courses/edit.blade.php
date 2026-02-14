@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit page</div>
    <div class="card-body">
        <form action="{{ url('courses/' .$courses->id )}}" method="post">{!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$courses->id}}">
            <label for="">Name</label><br>
             <input type="text" name="id" id="id" value="{{$courses->name}}" class="form-control">
             <label for="">Syllabus</label><br><br>
              <input type="text" name="syllabus" id="syllabus" class="form-control"><br>
 <label for="">Duration</label><br><br>
              <input type="text" name="duration" id="duration" class="form-control"><br>
<input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    </div>
</div>
@stop