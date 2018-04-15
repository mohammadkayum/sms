@extends('layout.master')
@section('title', 'Add Subject')

@section('content')
    <div class="container">
        <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
            <h1><u>Add Examination:-</u></h1>
        </div>

        {!! Form::open(array('route'=> 'exam.store', 'class'=>'form-horizontal', 'files'=>true)) !!}

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('exam_name', 'Exam Name', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('exam_name', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Exam name','required'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('heldon', 'Heldon', array('class'=>'col-md-4 form-group'))}}
                {{ Form::date('heldon', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Exam ID','required'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600; margin-bottom:15px;">
            <div class="row col-md-6">
                {{ Form::label('year', 'Year', array('class'=>'col-md-4 form-group'))}}
                {{Form::number('year', '',array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Year','required'))}}
            </div>
        </div>
        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <button style="width: 320px;margin-left: -15px;" type="submit" class="btn btn-primary"><b>Save</b></button>
                </div>
            </div>
        </div>


        {!! Form::close() !!}

    </div>
@endsection





