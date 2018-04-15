@extends('layout.master')
@section('title', 'Edit mark')

@section('content')
    <div class="container">
        <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
            <h1><u>Edit Mark:-</u></h1>
        </div>

        {!! Form::open(array('route'=> ['mark.update', $info->id], 'method'=>'PUT', 'class'=>'form-horizontal', 'files'=>true)) !!}

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('student_id', 'Student Id', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('student_id', $info->student_id, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Student ID','required'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('exam_id', 'Exam ID', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('exam_id', $info->exam_id, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Exam ID','required'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600; margin-bottom:15px;">
            <div class="row col-md-6">
                {{ Form::label('subject_id', 'Subject ID', array('class'=>'col-md-4 form-group'))}}
                {{Form::number('subject_id',$info->subject_id,array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Subject ID','required'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600; margin-bottom:15px;">
            <div class="row col-md-6 a">
                {{ Form::label('year', 'Year', array('class'=>'col-md-4  form-group'))}}
                {{ Form::number('year', $info->year, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Year','required'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6 a">
                {{ Form::label('mark', 'Mark', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('mark', $info->mark, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Mark','required'))}}
            </div>
        </div>
        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <button style="width: 320px;margin-left: -15px;" type="submit" class="btn btn-primary"><b>Update</b></button>
                </div>
            </div>
        </div>


        {!! Form::close() !!}

    </div>
@endsection





