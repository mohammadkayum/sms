@extends('layout.master')
@section('title', 'Teacher List')

@section('content')

    <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
        <h1><u>Teacher's List:-</u> </h1>
    </div>
    <table class="table table-striped table-bordered">
        <tr style="text-align:center; font-weight: 700;">
            <td>SL</td>
            <td>Image</td>
            <td>Name(E)</td>
            <td>Teacher ID</td>
            <td>Phone</td>
            <td>Email</td>
            <td colspan="2">Action</td>
        </tr>
        <?php $sl=1;?>
        @foreach($data as $teacher)
            <tr style="text-align:center">
                <td>{{$teacher->$sl=$sl++}}.</td>
                <td> <img style="height:40px; width:50px;" src="public/teacher/{{$teacher->image}}" required/></td>
                <td> <a href="{{route('teacher.show', $teacher->id)}}" style="text-decoration:none;">{{$teacher->e_name}}</a></td>
                <td>{{$teacher->t_id}}</td>
                <td>{{$teacher->phone}}</td>
                <td>{{$teacher->email}}</td>
                <td style="text-align:left;">
                    <a href="{{route('teacher.edit', $teacher->id)}}" style="width:80px; margin-right: -25px;" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    {!! Form::open(array('route'=>["teacher.destroy",$teacher->id], 'method'=>'DELETE')) !!}
                    <button type="submit" style="width:80px; margin-left:-13px; margin-right: -12px" class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

    </table>
@endsection