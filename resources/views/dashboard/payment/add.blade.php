@extends('dashboard.layouts.backend')

@section('content')

<div class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8 mx-auto d-block">


                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session()->has('msg'))
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="alert-heading font-size-h4 font-w400">Success</h3>
                        <p class="mb-0"> {{session()->get('msg')}} </p>
                    </div>
                @endif

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="block block-themed">
                    <div class="block-header bg-info">
                        <h3 class="block-title">Add Payment</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="{{route('payment.store')}}" autocomplete="on" method="post">
                           @csrf

                           <div class="form-group row">
                              <div class="col-6">
                                 <div class="form-material floating">
                                    <input type="number" class="form-control" value="" id="student_id" name="student_id">
                                    <label for="student_id"> Student Roll</label>
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-material floating">
                                    <select class="form-control" id="semester_id" name="semester_id">
                                        <option selected="" disabled="">Please Select Semester</option>
                                        @foreach($semesters as $semester)

                                        <option value="{{ $semester->id }}">{{ $semester->name}}</option>
                                        @endforeach
                                    </select>

                                 </div>
                              </div>
                           </div>

                           <div class="form-group row">
                              <div class="col-md-6">
                                 <div class="form-material floating">
                                    <select class="form-control" id="head_id" name="head_id">
                                        <option selected="" disabled="">Please Select Head</option>
                                        @foreach($heads as $head)

                                        <option value="{{ $head->id }}">{{ $head->name}}</option>
                                        @endforeach
                                    </select>

                                 </div>
                              </div>

                              <div class="col-md-6">

                                 <div class="form-material floating">
                                    <select class="form-control" id="payment_type" name="payment_type">
                                       <option  disabled="">Please Select Payment Type</option>
                                       <option selected="" value="cash">Cash</option>
                                    </select>
                                 </div>


                              </div>
                           </div>



                            <div class="form-group row">
                              <div class="col-6">
                                 <div class="form-material floating">

                                    <input type="number" class="form-control" id="amount" name="amount">
                                    <label for="amount">Amount</label>
                                 </div>
                              </div>

                              <div class="col-6 mt-5 pt-5">
                                <label class="col-12">Transaction Type</label>
                                 <div class="col-12">
                                    <div class="custom-control custom-radio custom-control-inline mb-5">
                                        <input class="custom-control-input" type="radio" name="transaction_type" id="transaction_type" value="debit" checked="">
                                        <label class="custom-control-label" for="debit">Debit</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline mb-5">
                                        <input class="custom-control-input" type="radio" name="transaction_type" id="transaction_type" value="credit">
                                        <label class="custom-control-label" for="credit">Credit</label>
                                    </div>
                                 </div>
                              </div>
                           </div>




                            <div class="form-group row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-alt-info">
                                        <i class="fa fa-send mr-5"></i>Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>



@endsection
