@extends('dashboard.layouts.backend')

@section('content')

<div class="content">
@php
    $balance_debit=collect([]);
    $balance_credit=collect([]);


@endphp


   <div class="block">
      <div class="block-header block-header-default">
         <h3 class="block-title"> Payment Report</h3>
         <div class="block-options">
            <button type="button" class="btn-block-option" onclick="Codebase.helpers('print-page');">
                  <i class="si si-printer"></i> Print Report
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle">
               <i class="si si-size-fullscreen"></i>
            </button>

            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
              </button>
          </div>
      </div>
      <div class="block-content">
          <div class="row">
              <div class="col-6 text-center">
                  <div class="table-responsive">

                      <table class="table table-bordered">
                          <tbody>
                          <thead>
                                <tr>
                                    <td colspan="2">Student Information</td>
                                </tr>
                          </thead>


                          <tbody>
                              <tr>
                                  <td>Roll </td>
                                  <td class="text-left"> <strong>{{$data->roll}}</strong></td>
                              </tr>
                              <tr>
                                  <td>Registration No </td>
                                  <td class="text-left">{{$data->registration_no}}</td>
                              </tr>
                              <tr>
                                  <td>Technology </td>
                                  <td class="text-left">{{$data->technology->name}}</td>
                              </tr>
                              <tr>
                                  <td>Session Year </td>
                                  <td class="text-left">{{$data->session->session_year}}</td>
                              </tr>
                              <tr>
                                  <td>Semester </td>
                                  <td class="text-left">{{$data->payment->first()['semester_id']}}</td>
                              </tr>
                          </tbody>


                      </table>

                  </div>
              </div>
          </div>


         <div class="row my-20">
            <div class="col-6 text-center">
               <div class="table-responsive">
                  <h3 class="block-title">Debite</h3>
                   <table class="table table-bordered">
                       <tbody>
                       <tr class="table-success">
                           <td>Schema Name</td>
                           <td>Amount</td>
                       </tr>


                           @foreach($data->payment as $payment)
                               @if($payment->transaction_type == 'debit')
                                   <tr>
                                       <td>{{$payment->head->name}}</td>
                                       <td>{{$payment->amount}}</td>
                                   </tr>

                                   @php
                                    $balance_debit->push($payment->amount);
                                   @endphp

                               @endif
                           @endforeach


                       <tr class="table-warning">
                           <td colspan="1" class="font-w700 text-uppercase text-right">Total</td>
                           <td class="font-w700">{{$balance_debit->sum()}} tk/=</td>
                       </tr>
                       </tbody>
                   </table>
               </div>
            </div>

            <div class="col-6 text-center">
               <div class="table-responsive">
                  <h3 class="block-title">Credit</h3>
                  <table class="table table-bordered">
                     <tbody>
                         <tr class="table-success">
                             <td>Schema Name</td>
                             <td>Amount</td>
                         </tr>

                         @foreach($data->payment as $payment)
                             @if($payment->transaction_type == 'credit')
                                 <tr>
                                     <td>{{$payment->head->name}}</td>
                                     <td>{{$payment->amount}}</td>
                                 </tr>

                                 @php
                                     $balance_credit->push($payment->amount);
                                 @endphp

                             @endif
                         @endforeach


                        <tr class="table-warning">
                           <td colspan="1" class="font-w700 text-uppercase text-right">Total</td>
                           <td class="font-w700">{{$balance_credit->sum()}} tk/= </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>

        <div class="row my-20">
            <div class="col-6"></div>
            <div class="col-6 text-center">
                <h4 class="table-success border p-2">Pay/Due: {{$balance_credit->sum()-$balance_debit->sum()}}</h4>
            </div>
        </div>

      </div>
   </div>
</div>


@endsection
