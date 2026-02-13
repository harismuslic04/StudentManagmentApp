@extends ('layout');
@section('content')

<div class="card">
    <div class="card-header">courses Page</div>
    <div class="card-body">
        <form action="{{ url('courses') }}" method="post">
                @csrf

            <label for="">Name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label for="">Syllabus</label><br><br>
              <input type="text" name="syllabus" id="syllabus" class="form-control"><br>
 <label for="">Duration</label><br><br>
              <input type="text" name="duration" id="duration" class="form-control"><br>
<input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection