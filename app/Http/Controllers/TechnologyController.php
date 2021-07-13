<?php

namespace App\Http\Controllers;

use App\technology;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Technologies;


class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technologies = DB::table('technologies')->select('id','name','code')->get();

        return view('dashboard.technology.index')->with('technologies', $technologies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $technologies = DB::table('technologies')->select('id','name','code')->get();

        // return view('dashboard.technology.add',compact('technologies'));
        return view('dashboard.technology.add');
        
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
            'name' => 'required',
            'code' => 'required | numeric'
           
        ]);


        if($validator->fails()){
            return redirect('technology/create')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $success = Technology::create($request->all());
            if($success){
                return redirect()->back()->with('msg', 'Record successfully added !');
            }
        }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function show(technology $technology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function edit(technology $technology)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, technology $technology)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function destroy(technology $technology)
    {
        //
    }
}
