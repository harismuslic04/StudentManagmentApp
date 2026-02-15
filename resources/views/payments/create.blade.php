@extends ('layout')
@section('content')

<div class="card">
    <div class="card-header">Payments</div>
    <div class="card-body">
        <form action="{{ url('payments') }}" method="post">
            @csrf

            <label>Enrollment number</label><br>
            

             <select name="enrollment_id" id="enrollment_id" class="form-control">
                @foreach ($enrollments as $id  =>$enroll_no)
                <option value="{{ $id }}">{{$enroll_no}}</option>
                @endforeach
             </select>
             <label>Paid date</label><br>
            <!-- <input type="number" name="course_id" class="form-control"><br> -->
                         <input type="date" name="paid_date" id="paid_date"  class="form-control"><br>
<br><br>

            <label>Amount</label><br>
            <input type="number" name="amount" id="amount" class="form-control"><br>

            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>
@endsection