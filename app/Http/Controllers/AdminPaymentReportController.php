<?php

namespace App\Http\Controllers;

use App\Technology;
use App\session;
use App\semester;
use App\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdminPaymentReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('dashboard.payment-report.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'semester_id' => 'required',
            'roll' => 'required'
        ]);



        $semester_id = $request->semester_id;
        $data= student::with(['payment' => function($q) use ($semester_id){
            $q->where('semester_id',$semester_id);
        }])->where('roll',$request->roll)->first();



        if($validator->fails()){
            return redirect('payment-report')
                ->withErrors($validator)
                ->withInput();
        }else{
            if($data != null){
                return view('dashboard.payment-report.view',compact('data'));
            }else{
                return redirect()->back()->with('msg', 'No Record Found !');
            }



        }


    }

    public function searchSingle(Request $request){


        $semester_id = $request->semester_id;

        $data= student::with(['payment' => function($q) use ($semester_id){
            $q->where('semester_id',$semester_id);
        }])->where('roll',$request->roll)->first();

        return view('dashboard.payment-report.view',compact('data'));
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
        //
    }
}
