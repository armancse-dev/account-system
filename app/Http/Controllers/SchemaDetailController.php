<?php

namespace App\Http\Controllers;
use App\SchemaMaster;
use App\SchemaDetail;
use App\Head;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;

class SchemaDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schema_details = SchemaDetail::with('schema_master','head')->get();
        return view('dashboard.schema-detail.index')->with('schema_details', $schema_details);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schema_master= SchemaMaster::all();
        $schema_detail= SchemaDetail::all();
        $heads= Head::all();


        // dd($schema_master);
        return view('dashboard.schema-detail.add',compact('schema_master','schema_detail','heads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//dd($request->all());
        $validator = Validator::make($request->all(),[
            'schema_master' => 'required',
            'head' => 'required',
            'amount' => 'required',
            'schema_type' => 'required',
            'number_of_payment' => 'required'
        ]);

        $data =[
            'schema_master_id' => $request->schema_master,
            'head_id' => $request->head,
            'amount' => $request->amount,
            'type' => $request->schema_type,
            'number_of_payment' =>$request->number_of_payment
        ];

        if($validator->fails()){
            return redirect('schema-detail/create')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $success = SchemaDetail::create($data);
            if($success){
                return redirect()->back()->with('msg', 'Record successfully added !');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SchemaDetail  $schemaDetail
     * @return \Illuminate\Http\Response
     */
    public function show(SchemaDetail $schemaDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchemaDetail  $schemaDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(SchemaDetail $schemaDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SchemaDetail  $schemaDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchemaDetail $schemaDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchemaDetail  $schemaDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchemaDetail $schemaDetail)
    {
        //
    }
}
