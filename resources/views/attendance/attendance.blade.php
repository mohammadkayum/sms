@extends('layout.master')
@section('title', 'Attendance')

@section('content')

    <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
        <h1><u>All Attendance List:-</u> </h1>
    </div>
    <table class="table table-striped table-bordered ">
        <tr style="text-align:center; color: #843534; font-weight: 700; border: 1px solid black">
            <td>SL</td>
            <td>Student Id</td>
            <td>Roll</td>
            <td>Class</td>
            <td>Session</td>
            <td>In Time</td>
            <td>Out Time</td>
            <td>Status</td>
            <td>Action</td>
        </tr>
        <?php $sl=1;?>
        @foreach($data as $attendance)
            <tr style="text-align:center">
                <td>{{$attendance->$sl=$sl++}}.</td>
                <td>{{$attendance->student_id}}</td>
                <td>{{$attendance->roll}}</td>
                <td>{{$attendance->class}}</td>
                <td>{{$attendance->session}}</td>
                <td>{{$attendance->in_time}}</td>
                <td>{{$attendance->out_time}}</td>
                <td>{{$attendance->status}}</td>
                <td>
                    {!! Form::open(array('route'=>["attendance.destroy",$attendance->id], 'method'=>'DELETE')) !!}
                    <button type="submit" style="width:80px; margin-right:-35px; margin-left:-35px;" class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

    </table>
@endsection