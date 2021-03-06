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
               <h3 class="block-title">Add Schema Details</h3>
               <div class="block-options">
                  <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                     <i class="si si-refresh"></i>
                  </button>
                  <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
               </div>
            </div>
            <div class="block-content">
               <form action="{{route('schema-detail.store')}}" method="post">
                  @csrf
                  <div class="form-group row">
                     <div class="col-md-6">
                        <div class="form-material floating">
                           <select class="form-control" id="schema_master" name="schema_master">
                              <option selected="" disabled="">Select Schema Master</option>
                              @foreach($schema_master as $schema)

                              <option value="{{ $schema->id }}" >{{ $schema->name }}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-material floating">
                           <select class="form-control" id="head" name="head">
                              <option selected="" disabled="">Select Head</option>
                              @foreach($heads as $head)
                              <option value="{{ $head->id }}" >{{ $head->name }}</option>

                              @endforeach
                           </select>
                        </div>
                     </div>
                  </div>

                  <div class="form-group row">
                     <div class="col-md-6 mt-5 pt-5">
                        <div class="col-12">
                           <div class="form-material floating">
                              <div class="form-group row">
                                 <label class="col-12">Select Type</label>
                                 <div class="col-12">
                                    <div class="custom-control custom-radio custom-control-inline mb-5">
                                       <input class="custom-control-input" type="radio" name="schema_type" id="fix" value="fix" checked="">
                                       <label class="custom-control-label" for="fix">Fix</label>
                                       </div>
                                    <div class="custom-control custom-radio custom-control-inline mb-5">
                                       <input class="custom-control-input" type="radio" name="schema_type" id="not_fix" value="not_fix">
                                       <label class="custom-control-label" for="not_fix">Not Fix</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-6">
                        <div class="form-material floating">
                           <input type="number" class="form-control" id="number_of_payment" name="number_of_payment">
                           <label for="number_of_payment">Number of Payment</label>
                        </div>
                     </div>
                  </div>

                  <div class="form-group row">
                     <div class="col-12">
                        <div class="form-material floating">
                           <input type="number" class="form-control" id="amount" name="amount">
                           <label for="amount">Amount</label>
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
