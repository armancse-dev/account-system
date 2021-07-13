<?php

namespace App\Http\Controllers;

use App\Head;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;





class HeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heads = Head::all();

        return view('dashboard.head.index')->with('heads', $heads);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.head.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required'

        ]);


        if($validator->fails()){
            return redirect('head/create')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $success = Head::create($request->all());
            if($success){
                return redirect()->back()->with('msg', 'Record successfully added !');
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Head  $head
     * @return \Illuminate\Http\Response
     */
    public function show(Head $head)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Head  $head
     * @return \Illuminate\Http\Response
     */
    public function edit(Head $head)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Head  $head
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Head $head)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Head  $head
     * @return \Illuminate\Http\Response
     */
    public function destroy(Head $head)
    {
        //
    }
}
