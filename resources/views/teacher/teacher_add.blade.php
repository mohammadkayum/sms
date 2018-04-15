@extends('layout.master')
@section('title', 'Add All Teacher')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Addmission </title>
    <!-- Bootstrap core CSS-->
    <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{asset('admin/css/sb-admin.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/a.css')}}" rel="stylesheet">
</head>
<body>

<div class="container" style="width: 100%; margin: auto;">
    <h3 style="text-align: center;margin-top: 20px; margin-bottom: 30px">Add All Teacher</h3>
    <div class="wrapper" style="background-color:white;">
        {!! Form::open(array('route'=> 'teacher.store', 'class'=>'form-horizontal', 'files'=>true)) !!}

        <div class="row col-md-12 {{ $errors->has('e_name') ? 'has-error' : '' }} ">
            {{ Form::label('e_name', ' Name (English) :', array('class'=>'control-label col-md-2'))}}
            {{ Form::text('e_name', '', array('class'=>'col-md-10 form-control', 'placeholder'=>' Name English'))}}
            @if($errors->has('e_name'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('e_name') }}</strong>
                   </span>
            @endif

        </div><br>
        <div class="row col-md-12 {{ $errors->has('b_name') ? 'has-error' : '' }} ">
            {{ Form::label('b_name', ' Name (Bangali) :', array('class'=>'control-label col-md-2'))}}
            {{ Form::text('b_name', '', array('class'=>'col-md-10 form-control', 'placeholder'=>' Name Bangla'))}}
            @if($errors->has('b_name'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('b_name') }}</strong>
                   </span>
            @endif

        </div><br>

        <div class="row col-md-12 {{ $errors->has('S') ? 'has-error' : '' }} ">
            {{ Form::label('gender', ' Gender :', array('class'=>'control-label col-md-2'))}}
            {{ Form::select('gender', ['null'=>' Gender','Male'=>'Male', 'Female'=>'Female'], array('class'=>'col-md-2 form-control select_btn' ),array('class'=>' form-control  col-md-4' ),array('style'=>'width:360px;' ))}}
            @if($errors->has('gender'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('gender') }}</strong>
                   </span>
            @endif

            {{ Form::label('blood', ' Blood group :', array('class'=>'control-label  col-md-2'))}}
            {{ Form::select('blood', ['null'=>'Select blood', 'A+'=>'A+','B+'=>'B+','O+'=>'O+','O-'=>'O-','Ab+'=>'Ab+'], array('class'=>'col-md-2 form-control select_btn' ),array('class'=>' form-control  col-md-4' ),array('style'=>'width:360px;' ))}}
            @if($errors->has('blood'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('blood') }}</strong>
                   </span>
            @endif

        </div><br>
        <div class="row col-md-12 {{ $errors->has('dmy') ? 'has-error' : '' }} ">
            {{ Form::label('dmy', ' Birth Date :', array('class'=>'control-label col-md-2'))}}
            {{ Form::date('dmy',' ', array('class'=>' form-control col-md-4 select_btn' ))}}
            @if($errors->has('dmy'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('dmy') }}</strong>
                   </span>
            @endif

            {{ Form::label('religion', ' Religion :', array('class'=>'control-label col-md-2'))}}
            {{ Form::select('religion', ['null'=>' Religion', 'Muslim'=>'Muslim','Hindu'=>'Hindu','Boddo'=>'Boddo','Chistan'=>'Chistan'], array('class'=>' form-control select_btn' ), array('class'=>' form-control  col-md-4' ),array('style'=>'width:360px;' ))}}
            @if($errors->has('religion'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('religion') }}</strong>
                   </span>
            @endif

        </div><br>

        <div class="row col-md-12 {{ $errors->has('t_id') ? 'has-error' : '' }} ">
            {{ Form::label('t_id', ' Teacher ID:', array('class'=>'control-label col-md-2'))}}
            {{ Form::number('t_id',' ', array('class'=>' form-control col-md-4 select_btn' ))}}
            @if($errors->has('t_id'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('t_id') }}</strong>
                   </span>
            @endif

            {{ Form::label('email', ' Email :', array('class'=>'control-label col-md-2'))}}
            {{ Form::email('email',' ', array('class'=>' form-control col-md-4 select_btn' ))}}
            @if($errors->has('email'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('religion') }}</strong>
                   </span>
            @endif

        </div><br>

        <div class="row col-md-12 {{ $errors->has('phone') ? 'has-error' : '' }} ">
            {{ Form::label('phone', ' Phone Number:', array('class'=>'control-label col-md-2'))}}
            {{ Form::number('phone', '', array('class'=>'col-md-4 form-control', 'placeholder'=>' Mobaile no'))}}
            @if($errors->has('phone'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('phone') }}</strong>
                   </span>
            @endif

            {{ Form::label('nid', 'NID Number :', array('class'=>'control-label col-md-2'))}}
            {{ Form::number('nid', '', array('class'=>'col-md-4 form-control', 'placeholder'=>' NID NO'))}}
            @if($errors->has('nid'))
                <span class="help-block" style="display:block">
          <strong>{{ $errors->first('nid') }}</strong>
                   </span>
            @endif
        </div><br>

        <div class="{{ $errors->has('image') ? 'has-error' : '' }} row col-md-12 ">

            {{ Form::label('image', ' Image:', array('class'=>'control-label col-md-2 '))}}
            {{ Form::file('image', array('class'=>'col-md-10 form-control'))}}

        </div><br>

    </div>


    <div class="row col-md-12 {{ $errors->has('present_address') ? 'has-error' : '' }} ">
        {{ Form::label('present_address', 'Present address  :', array('class'=>'control-label col-md-2'))}}
        {{ Form::textarea('present_address', '', array('class'=>'col-md-4 form-control', 'placeholder'=>' address'))}}
        @if($errors->has('present_address'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('present_address') }}</strong>
                   </span>
        @endif
        {{ Form::label('parmanent_address', 'Parmanent Address', array('class'=>'control-label col-md-2'))}}<br>
        {{ Form::textarea('parmanent_address', '', array('class'=>'col-md-4 form-control', 'placeholder'=>' address'))}}
        @if($errors->has('parmanent_address'))
            <span class="help-block" style="display:block">
          <strong>{{ $errors->first('parmanent_address') }}</strong>
                   </span>
        @endif

    </div><br>
    <div style="margin-bottom:60px" class="row">
        <div class="h-60"></div>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <a href="">
                <button type="submit" name="submit" value="submit" class="btn btn-style blue a"><b>Save</b></button>
            </a>
        </div>
        <div class="col-md-3"></div>
    </div><br>
    {!! Form::close() !!}
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core plugin JavaScript-->
<script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<!-- Custom scripts for all pages-->
<script src="{{asset('admin/js/sb-admin.min.js')}}"></script>
</body>
</body>
</html>
@endsection