<?php

namespace App\Http\Controllers;

use App\session;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions = DB::table('sessions')->select('id','session_year')->get();

        return view('dashboard.session.index')->with('sessions', $sessions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('dashboard.session.add');
        
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
            'session_year' => 'required'
            
        ]);

        if($validator->fails()){
            return redirect('sessions/create')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $success = Session::create($request->all());
            if($success){
                return redirect()->back()->with('msg', 'Record successfully added !');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\session  $session
     * @return \Illuminate\Http\Response
     */
    public function show(session $session)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\session  $session
     * @return \Illuminate\Http\Response
     */
    public function edit(session $session)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\session  $session
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, session $session)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\session  $session
     * @return \Illuminate\Http\Response
     */
    public function destroy(session $session)
    {
        //
    }
}
