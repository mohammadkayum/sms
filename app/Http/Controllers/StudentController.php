<?php

namespace App\Http\Controllers;

use App\studentModel;
use Illuminate\Http\Request;
use Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=studentModel::get();
        return view('admin.students', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $validator=Validator::make($request->all(),[
            'ename'=>'required',
            'bname'=>'required',
            'roll'=>'required',
            'reg'=>'required',
            'class'=>'required',
            'shift'=>'required',
            'section'=>'required',
            'session'=>'required',
            'sid'=>'required',
            'dmy'=>'required',
            'gender'=>'required',
            'blood_group'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'fname'=>'required',
            'mname'=>'required',
            'guardian_name'=>'required',
            'guardian_id'=>'required',
            'photo'=>'required',
            ]);
        if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
    }
        if ($request->hasFile('photo')) {
            $file=$request->file('photo');
            $fileType=$file->getClientOriginalExtension();
            $fileName=rand(1,1000).date('dmyhis').".".$fileType;
            /*$fileName=$file->getClientOriginalName();*/
            $file->move('public/files',$fileName);
            $input['photo']=$fileName;
        }

        $data=studentModel::create($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info=studentModel::findOrFail($id);
        return view('admin.student_profile', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info=studentModel::findOrFail($id);
        return view('admin.edit_student', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=studentModel::findOrFail($id);
        $input=$request->all();
        if ($request->hasFile('photo')) {
            $file=$request->file('photo');
            $fileType=$file->getClientOriginalExtension();
            $fileName=rand(1,1000).date('dmyhis').".".$fileType;
            /*$fileName=$file->getClientOriginalName();*/
            $file->move('public/files',$fileName);
            $input['photo']=$fileName;
        }
        $data->update($input);
        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=studentModel::findOrFail($id);
        $data->delete($data);
        return redirect('/student');
    }
}
