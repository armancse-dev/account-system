@extends('dashboard.layouts.backend')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="col-xl-6 mx-auto">
                

                <div class="block block-themed">
                    <div class="block-header bg-info">
                        <h3 class="block-title">Edit Transaction</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="{{route('transactions.store')}}" method="post">

                            @csrf
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">

                                        <input type="text" class="form-control" id="student_id" name="student_id">
                                        <label for="student_id">Enter Student Id</label>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="technology_id" name="technology_id">
                                        <label for="technology_id">Enter Technology Id</label>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="payment_schema_id" name="payment_schema_id">
                                        <label for="payment_schema_id">Enter Payment Schema Id</label>

                                    </div>
                                </div>
                            </div>

                             <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="amount" name="amount">
                                        <label for="amount">Enter Payment Amount</label>

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
</div>



@endsection