@extends('layout.master')
@section('title', 'Add Subject')

@section('content')
    <div class="container">
        <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
            <h1><u>Add Attendance:-</u></h1>
        </div>

        {!! Form::open(array('route'=> 'attendance.store', 'class'=>'form-horizontal', 'files'=>true)) !!}

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('student_id', 'Student Id', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('student_id', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Student ID'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('roll', 'Roll', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('roll', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Subject Name'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600; margin-bottom:15px;">
            <div class="row col-md-6">
                {{ Form::label('class', 'Class', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('class', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Subject Name'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600; margin-bottom:15px;">
            <div class="row col-md-6 a">
                {{ Form::label('session', 'Session', array('class'=>'col-md-4  form-group'))}}
                {{ Form::text('session', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Subject Name'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6 a">
                {{ Form::label('date', 'Date', array('class'=>'col-md-4 form-group'))}}
                {{ Form::date('date', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Mark'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6 a">
                {{ Form::label('in_time', 'In Time', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('in_time', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Mark'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6 a">
                {{ Form::label('out_time', 'Out Time', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('out_time', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Mark'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6 a">
                {{ Form::label('status', 'Status', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('status', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Mark'))}}
            </div>
        </div>
        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <button style="width: 320px;margin-left: -15px; margin-bottom: 30px;" type="submit" class="btn btn-primary"><b>Save</b></button>
                </div>
            </div>
        </div>


        {!! Form::close() !!}

    </div>
@endsection