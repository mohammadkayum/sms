<?php

namespace App\Http\Controllers;

use App\admissionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class admissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=admissionModel::get();
        return view('admission.show_all_admission', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admission.admission');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();

//        if($validator->fails()){
//            return redirect()->back()->withErrors($validator)->withInput();
//        }
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $fileType=$file->getClientOriginalExtension();
            $fileName=rand(1,1000).date('dmyhis').".".$fileType;
            /*$fileName=$file->getClientOriginalName();*/
            $file->move('public/admission',$fileName);
            $input['image']=$fileName;
        }

        $data=admissionModel::create($input);
        return redirect ('admission');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=admissionModel::findOrFail($id);
        $data->delete($data);
        return redirect('/admission');
    }


    public function activate($id)
    {
        $data=DB::table('admission')
            ->where('id', $id)
            ->update(['status' => 1]);
        return redirect('/admission');
    }
}
