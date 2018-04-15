@extends('layout.master')
@section('title', 'Exam')

@section('content')

    <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
        <h1><u>Examination's List:-</u> </h1>
    </div>
    <table class="table table-striped table-bordered ">
        <tr style="text-align:center; color: #843534; font-weight: 700; border: 1px solid black">
            <td>SL</td>
            <td>Exam Name</td>
            <td>Heldon</td>
            <td>Year</td>
            <td colspan="2">Action</td>
        </tr>
        <?php $sl=1;?>
        @foreach($data as $exam)
            <tr style="text-align:center">
                <td>{{$exam->$sl=$sl++}}.</td>
                <td>{{$exam->exam_name}}</td>
                <td>{{$exam->heldon}}</td>
                <td>{{$exam->year}}</td>
                <td style="text-align:left;">
                    <a href="{{route('exam.edit', $exam->id)}}" style="width:80px; margin-right: -70px;" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    {!! Form::open(array('route'=>["exam.destroy",$exam->id], 'method'=>'DELETE')) !!}
                    <button type="submit" style="width:80px; margin-right:-35px; margin-left:-35px;" class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

    </table>
@endsection