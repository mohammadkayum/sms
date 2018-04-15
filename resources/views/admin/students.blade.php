@extends('layout.master')
@section('title', 'New Student')

@section('content')

    <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
        <h1><u>Student's List:-</u> </h1>
    </div>
    <table class="table table-striped table-bordered ">
        <tr style="text-align:center; color: #843534; font-weight: 700; border: 1px solid black">
            <td style="">SL</td>
            <td>Image</td>
            <td>Name</td>
            <td>ID</td>
            <td>Roll</td>
            <td>Registration</td>
            <td style="text-align:left">Phone</td>
            <td colspan="2">Action</td>
        </tr>
        <?php $sl=1;?>
        @foreach($data as $student)
            <tr style="text-align:center">
                <td>{{$student->$sl=$sl++}}.</td>
                <td> <img style="height:40px; width:50px;" src="public/files/{{$student->photo}}"/></td>
                <td> <a href="{{route('student.show', $student->id)}}" style="text-decoration:none;">{{$student->ename}}</a></td>
                <td>{{$student->sid}}</td>
                <td>{{$student->roll}}</td>
                <td>{{$student->reg}}</td>
                <td style="text-align:left">{{$student->phone}}</td>
                <td style="text-align:left;">
                    <a href="{{route('student.edit', $student->id)}}" style="width:80px; margin-right: -30px;" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    {!! Form::open(array('route'=>["student.destroy",$student->id], 'method'=>'DELETE')) !!}
                    <button type="submit" style="width:80px; margin-right:-15px; margin-left:-15px;" class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

    </table>
@endsection