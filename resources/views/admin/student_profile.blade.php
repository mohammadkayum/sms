@extends('layout.master')
@section('title', 'New Student')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Profile</title>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/a.css')}}" />
</head>
<body>




<div class="head">
    <h1>It's {{$info->ename}} Profile</h1>
</div>

<div id="container">
    <div id="profile">
        <div class="col-md-12"><div class="about">
                <div class="profile-photo">
                    <img style="height:154px; width:127px;" src="../public/files/{{$info->photo}}"/>
                </div>
                <h1>{{$info->ename}}</h1>
                <h3><i>Student of Mohim Institution,Faridpur.</i></h3>
                <p>This article is about institutions for learning. For the concept of "schooling", see Education. For other uses of the word "school", see School (disambiguation) and Educational institution.</p>
            </div>
            <ul class="basic-info">
                <li><h3>BASIC INFO </h3></li>
                <li><label>Name(B):</label><span style="margin-top:5px;">{{$info->bname}}</span></li>
                <li><label>Father Name:</label><span style="margin-top:5px;">{{$info->fname}}</span></li>
                <li><label>Mother Name:</label><span style="margin-top:5px;">{{$info->mname}}</span></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-md-6 zz ">
                <h3 class="head2">Academic Information*:</h3>
                <ul class="basic-info">
                    <li><label>Class:</label><span style="margin-top:5px;">{{$info->class}}</span></li>
                    <li><label>Registration:</label><span style="margin-top:5px;">{{$info->reg}}</span></li>
                    <li><label>Roll:</label><span style="margin-top:5px;">{{$info->roll}}</span></li>
                    <li><label>Shift:</label><span style="margin-top:5px;">{{$info->shift}}</span></li>
                    <li><label>Section:</label><span style="margin-top:5px;">{{$info->section}}</span></li>
                    <li><label>Session:</label><span style="margin-top:5px;">{{$info->session}}</span></li>
                    <li><label>ID:</label><span style="margin-top:5px;">{{$info->sid}}</span></li>
            </div>
            <div class="col-md-6 yy">
                <h3 style="margin-top:-25px;" class="head2">Other's Information*:</h3>
                <ul class="basic-info">
                    <li><label>Phone:</label><span style="margin-top:5px;">{{$info->phone}}</span></li>
                    <li><label>DOB:</label><span style="margin-top:5px;">{{$info->dmy}}</span></li>
                    <li><label>Gender:</label><span style="margin-top:5px;">{{$info->gender}}</span></li>
                    <li><label>Blood Group:</label><span style="margin-top:5px;">{{$info->blood_group}}</span></li>
                    <li><label>Address:</label><span style="margin-top:5px;">{{$info->address}}</span></li>
                    <li><label>Guardian:</label><span style="margin-top:5px;">{{$info->guardian_name}}</span></li>
                    <li><label>Guardian Id:</label><span style="margin-top:5px;">{{$info->guardian_id}}</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="h-60"></div>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <a href="">
                <button type="submit" name="submit" value="submit" class="btn btn-style blue a"><b>Update</b></button>
            </a>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

</body>
</html>
@endsection