@extends('layout.master')
@section('title', 'All Admission Student')

@section('content')

    <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
        <h1><u>All Admission Student Show:-</u> </h1>
    </div>
    <table class="table  table-striped table-bordered table-responsive">
        <tr style="text-align:center; font-weight: 700;">
            <td>SL</td>
            <td>Image</td>
            <td>Name(E)</td>
            <td>Name(B)</td>
            <td>Class</td>
            <td>Year</td>
            <td>Gender</td>
            <td>Blood group</td>
            <td>Birth Date</td>
            <td>Religion</td>
            <td>Student phone</td>
            <td>Previous School Name</td>
            <td>Father Name</td>
            <td>Mother Name</td>
            <td>Father Occation </td>
            <td>Mother Occation </td>
            <td>Gurdian Name </td>
            <td>Gardian NID </td>
            <td>Present address </td>
            <td>Parmanent Address </td>
            <td>Quota</td>
            <td>Action</td>
        </tr>
        <?php $sl=1;?>
        @foreach($data as $student)
            <tr style="text-align:center">
                <td>{{$student->$sl=$sl++}}.</td>
                <td><img style="height:40px; width:50px;" src="public/admission/{{$student->image}}"/></td>
                <td> {{$student->e_name}}</a></td>
                <td> {{$student->b_name}}</a></td>
                <td>{{$student->class}}</td>
                <td>{{$student->year}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->blood}}</td>
                <td>{{$student->dmy}}</td>
                <td>{{$student->religion}}</td>
                <td>{{$student->std_phone}}</td>
                <td>{{$student->pre_school}}</td>
                <td>{{$student->f_name}}</td>
                <td>{{$student->m_name}}</td>
                <td>{{$student->f_occation}}</td>
                <td>{{$student->m_occation}}</td>
                <td>{{$student->g_name}}</td>
                <td>{{$student->g_nid}}</td>
                <td>{{$student->present_address}}</td>
                <td>{{$student->parmanent_address}}</td>
                <td>{{$student->quota}}</td>
                <td>
                    {!! Form::open(array('route'=>["admission.activate",$student->id], 'method'=>'REQUEST')) !!}
                    <button type="submit" style="width:80px;"  class="btn btn-danger">Active</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

    </table>
@endsection