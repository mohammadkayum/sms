@extends('layout.master')
@section('title', 'All Subject')

@section('content')

    <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
        <h1><u>Mark List:-</u> </h1>
    </div>
    <table class="table table-striped table-bordered">
        <tr style="text-align:center; font-weight: 700;">
            <td>SL</td>
            <td>Student ID</td>
            <td>Exam ID</td>
            <td>Subject ID</td>
            <td>Year</td>
            <td>Full Mark </td>
            <td colspan="2" >Action</td>
        </tr>
        <?php $sl=1;?>
        @foreach($data as $mark)
            <tr style="text-align:center">
                <td>{{$mark->$sl=$sl++}}.</td>
                <td>{{$mark->student_id}}</td>
                <td>{{$mark->exam_id }}</td>
                <td>{{$mark->subject_id}}</td>
                <td>{{$mark->year}}</td>
                <td>{{$mark->mark}}</td>
                <td style="text-align:left;">
                    <a href="{{route('mark.edit', $mark->id)}}" style="width:80px; margin-right: -45px;" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    {!! Form::open(array('route'=>["mark.destroy",$mark->id], 'method'=>'DELETE')) !!}
                    <button type="submit" style="width:80px; margin-right: -25px; margin-left:-25px;" class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

    </table>
@endsection