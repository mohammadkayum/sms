@extends('layout.master')
@section('title', 'New Student')

@section('content')
	<div class="container">
		<div style="text-align:center;margin-top:10px; margin-bottom:40px;">
			<h1><u>Add new Student:-</u></h1>
		</div>

		{!! Form::open(array('route'=> 'student.store', 'class'=>'form-horizontal', 'files'=>true)) !!}

		<div class="row col-md-12" style="font-weight: 600;">
			<div class="row col-md-6">
				{{ Form::label('ename', 'Student Name', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('ename', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'English Name*'))}}
				<div class="col-md-4"></div>
				<div class="col-md-8">
				@if($errors->has('ename'))
					<span class="help-block" style="display:block">
						<strong style="color:red;" >{{ $errors->first('ename') }}</strong>
                   </span>
				@endif
				</div>
			</div>
			<div class="row col-md-6">
				{{ Form::label('bname', 'Student Name', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('bname', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Bangla Name*'))}}
				<div class="col-md-4"></div>
					<div class="col-md-8">
						@if($errors->has('bname'))
							<span class="help-block" style="display:block">
							<strong style="color:red;" >{{ $errors->first('bname') }}</strong>
					   </span>
						@endif
					</div>
				</div>
			</div>
		<div class="row col-md-12" style="font-weight: 600;" >
			<div class="row col-md-6">
				{{ Form::label('roll', 'Roll Number', array('class'=>'col-md-4 form-group'))}}
				{{ Form::number('roll', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Roll Number*'))}}
			</div>
			<div class="row col-md-6">
				{{ Form::label('reg', 'Registration', array('class'=>'col-md-4 form-group'))}}
				{{ Form::number ('reg', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Registration*'))}}
			</div>
		</div>
		<div class="row col-md-12" style="font-weight: 600;" >
			<div class="row col-md-6">
				{{ Form::label('class', 'Class', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('class', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Class*'))}}
			</div>
			<div class="row col-md-6">
				{{ Form::label('shift', 'Shift', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('shift', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Shift*'))}}
			</div>
		</div>


		<div class="row col-md-12" style="font-weight: 600;" >
			<div class="row col-md-6">
				{{ Form::label('section', 'Section', array('class'=>'col-md-4 form-group'))}}
				{{ Form::select('section', ['Null'=>'Select section*','A'=>'Section A', 'B'=>'Section B'] ,array('class'=>'form-control col-md-8'))}}
			</div>
			<div class="row col-md-6">
				{{ Form::label('session', 'Session', array('class'=>'col-md-4 form-group'))}}
				{{ Form::select('session', ['Null'=>'Select session*','2017-18'=>'2017-18', '2016-17'=>'2016-17','2015-16'=>'2015-16','2014-15'=>'2014-15'] ,array('class'=>'form-control col-md-8'))}}
			</div>
		</div>


		<div class="row col-md-12" style="font-weight: 600;">
			<div class="row col-md-6">
				{{ Form::label('sid', 'Student Id', array('class'=>'col-md-4 form-group'))}}
				{{ Form::number('sid', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'ID'))}}
			</div>
			<div class="row col-md-6">
				{{ Form::label('dmy', 'Date of Birth', array('class'=>'col-md-4 form-group'))}}
				{{ Form::date('dmy', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Date of Birth'))}}
			</div>
		</div>



		<div class="row col-md-12" style="font-weight: 600;" >
			<div class="row col-md-6 a">
				{{ Form::label('gender', 'Gender', array('class'=>'col-md-4 form-group'))}}
				{{ Form::select('gender', ['Null'=>'Select Gender*','Male'=>'Male', 'Female'=>'Female'] ,array('class'=>'form-control col-md-12'))}}
			</div>
			<div class="row col-md-6 a">
				{{ Form::label('blood_group', 'Blood Group', array('class'=>'col-md-4 form-group'))}}
				{{ Form::select('blood_group', ['Null'=>'Select Blood Group*','A+'=>'A+', 'A-'=>'A-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-','B+'=>'B+','B-'=>'B-'] ,array('class'=>'form-control col-md-12'))}}
			</div>
		</div>


		<div class="row col-md-12" style="font-weight: 600;">
			<div class="row col-md-6">
				{{ Form::label('phone', 'Phone', array('class'=>'col-md-4 form-group'))}}
				{{ Form::number('phone', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Phone*'))}}
			</div>
			<div class="row col-md-6">
				{{ Form::label('address', 'Address', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('address', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Address*'))}}
			</div>
		</div>
		<div class="row col-md-12" style="font-weight: 600;">
			<div class="row col-md-6">
				{{ Form::label('fname', 'Father name', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('fname', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Father Name*'))}}
			</div>
			<div class="row col-md-6">
				{{ Form::label('mname', 'Mother Name', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('mname', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Mother Name*'))}}
			</div>
		</div>

		<div class="row col-md-12" style="font-weight: 600;">
			<div class="row col-md-6">
				{{ Form::label('guardian_name', 'Guardian Name', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('guardian_name', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Guardian Name*'))}}
			</div>
			<div class="row col-md-6">
				{{ Form::label('guardian_id', 'Guardian Id', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('guardian_id', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Guardian ID*'))}}
			</div>
		</div>
		<div class="row col-md-12" style="font-weight: 600;">
			<div class="row col-md-6">
				{{ Form::label('photo', 'Student Photo', array('class'=>'col-md-4 form-group'))}}
				{{ Form::file('photo', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Photo*'))}}
			</div>
			<div class="row col-md-6">
			</div>
		</div>

		<div class="row">
			<div class="h-60"></div>
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<button type="submit" class="btn button btn-style blue a"><b>Register</b></button>
			</div>
			<div class="col-md-3"></div>
		</div>

	{!! Form::close() !!}

	</div>
@endsection