<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Student;
use Illuminate\Http\Request;
use DB;
use App\Semester;
use App\Head;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $payments = Payment::with('student','head','semester')->get();
        return view('dashboard.payment.index')->with('payments', $payments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $schema_master= SchemaMaster::all();
        // $schema_detail= SchemaDetail::all();
        // $heads= Head::all();

        $semesters= Semester::all();
        $heads= Head::all();
        $students= Student::all();

        return view('dashboard.payment.add',compact('semesters','heads','students'));
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
            'student_id' => 'required',
            'semester_id' => 'required',
            'amount' => 'required',
            'head_id' => 'required',
            'transaction_type' => 'required',
            'payment_type' => 'required'

        ]);

        $datum = Student::where('roll',$request->student_id)->first();

        //return $datum->id;die();

        $data = [
            'student_id' => $datum->id,
            'semester_id' => $request->semester_id,
            'amount' => $request->amount,
            'head_id' => $request->head_id,
            'debit' => $request->debit,
            'payment_type' => $request->payment_type,
            'transaction_type' => $request->transaction_type
        ];

        if($validator->fails()){
            return redirect('payment/create')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $success = Payment::create($data);
            if($success){
                return redirect()->back()->with('msg', 'Record successfully added !');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
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
                return view('dashboard.payment-single.view',compact('data'));
            }else{
                return redirect()->back()->with('msg', 'No Record Found !');
            }



        }

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }


    public function StudentDetail(){
        return view('dashboard.payment-single.index');
    }


}
