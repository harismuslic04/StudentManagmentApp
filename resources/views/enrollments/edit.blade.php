@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit page</div>
    <div class="card-body">
        <form action="{{ url('entrollments/' .$entrollments->id )}}" method="post">{!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$entrollments->id}}">
            


<label for="">Entroll no</label><br>
            <input type="text" name="entroll_no" id="entroll_no" class="form-control" value="{{$entrollments->entroll_no}}"><br>
            <label for="">Batch id</label><br><br>
              <input type="text" name="batch_id" id="batch_id" class="form-control" value="{{$entrollments->batch_id}}"><br>
 <label for="">Student</label><br><br>
              <input type="text" name="student" id="student" class="form-control" value="{{$entrollments->student_id}}"><br>
               <label for="">Join date</label><br><br>
              <input type="text" name="join_date" id="join_date" class="form-control" value="{{$entrollments->join_date}}"><br>
 <label for="">Fee</label><br><br>
              <input type="text" name="fee" id="fee" class="form-control" value="{{$entrollments->fee}}"><br>

 <input type="submit" value="Update" class="btn btn-success"> <br>
        </form>
    </div>
</div>
@stop