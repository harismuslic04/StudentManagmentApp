@extends ('layout')
@section('content')

<div class="card">
    <div class="card-header">Batches</div>
    <div class="card-body">
        <form action="{{ url('batches') }}" method="post">
            @csrf

            <label>Batch Name</label><br>
            <input type="text" name="name" class="form-control"><br>

            <label>Course ID</label><br>
            <!-- <input type="number" name="course_id" class="form-control"><br> -->
             <select name="course_id" id="course_id" class="form-control">
                @foreach ($courses as $id  =>$name)
                <option value="{{ $id }}">{{$name}}</option>
                @endforeach
             </select>
<br><br>
            <label>Start Date</label><br>
            <input type="date" name="start_date" class="form-control"><br>

            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>
@endsection