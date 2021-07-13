<?php

namespace App\Http\Controllers;

use App\SchemaMaster;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use App\Session;

class SchemaMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $schema_masters = DB::table('schema_masters')->select('id','name','session','created_at')->get();

        return view('dashboard.schema-master.index')->with('schema_masters', $schema_masters);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sessions= Session::all();
        return view('dashboard.schema-master.add',compact('sessions'));
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
            'session' => 'required'

        ]);


        if($validator->fails()){
            return redirect('schema_master/create')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $success = SchemaMaster::create($request->all());
            if($success){
                return redirect()->back()->with('msg', 'Record successfully added !');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SchemaMaster  $schemaMaster
     * @return \Illuminate\Http\Response
     */
    public function show(SchemaMaster $schemaMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchemaMaster  $schemaMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(SchemaMaster $schemaMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SchemaMaster  $schemaMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchemaMaster $schemaMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchemaMaster  $schemaMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchemaMaster $schemaMaster)
    {
        //
    }
}
