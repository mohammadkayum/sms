@extends('layout.master')
@section('title', 'All Subject')

@section('content')

    <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
        <h1><u>Subject List:-</u> </h1>
    </div>
    <table class="table  table-striped table-bordered">
        <tr style="text-align:center; font-weight: 700;">
            <td>SL</td>
            <td>Subject Code</td>
            <td>Subject Name</td>
            <td>Teacher ID</td>
            <td>Class</td>
            <td>Full Mark </td>
            <td colspan="2" >Action</td>
        </tr>
        <?php $sl=1;?>
        @foreach($data as $subject)
            <tr style="text-align:center">
                <td>{{$subject->$sl=$sl++}}.</td>
                <td>{{$subject->subject_id}}</td>
                <td>{{$subject->subject_name }}</td>
                <td>{{$subject->teacher_id}}</td>
                <td>{{$subject->class}}</td>
                <td>{{$subject->mark}}</td>
                <td style="text-align:left;">
                    <a href="{{route('subject.edit', $subject->id)}}" style="width:80px; margin-right: -38px;" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    {!! Form::open(array('route'=>["subject.destroy",$subject->id], 'method'=>'DELETE')) !!}
                    <button type="submit" style="width:80px; margin-left:-19px; margin-right: -19px" class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

    </table>
@endsection