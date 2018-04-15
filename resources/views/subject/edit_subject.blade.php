@extends('layout.master')
@section('title', 'Add Subject')

@section('content')
    <div class="container">
        <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
            <h1><u>Add Subject:-</u></h1>
        </div>

        {!! Form::open(array('route'=> ['subject.update', $info->id], 'method'=>'PUT', 'class'=>'form-horizontal', 'files'=>true)) !!}

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('subject_id', 'Subject Id', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('subject_id', $info->subject_id, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Subject ID'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('subject_name', 'Subject Name', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('subject_name',  $info->subject_name, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Subject Name'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('teacher_id', 'Teacher ID', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('teacher_id',  $info->teacher_id, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Teacher ID'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6 a">
                {{ Form::label('class', 'Class', array('class'=>'col-md-4 form-group'))}}
                {{ Form::select('class', ['Null'=>'Select Class*','Six'=>'Six', 'Seven'=>'Seven','Eight'=>'Eight','Nine'=>'Nine','Ten'=>'ten'] ,array('class'=>'form-control col-md-12'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6 a">
                {{ Form::label('mark', 'Mark', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('mark',  $info->mark, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Mark'))}}
            </div>
        </div>
        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <button style="width: 316px;margin-left: -15px;" type="submit" class="btn btn-primary"><b>Save</b></button>
                </div>
            </div>
        </div>


        {!! Form::close() !!}

    </div>
@endsection