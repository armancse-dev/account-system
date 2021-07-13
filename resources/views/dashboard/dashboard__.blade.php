@extends('dashboard.layouts.backend')
@section('content')

<div class="bg-body-dark">
   <div class="content">
      <div class="row">
         <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-rounded text-center" href="javascript:void(0)">
               <div class="block-content">
                  <p class="mt-5 mb-10">
                     <i class="fa fa-pencil text-gray fa-2x d-xl-none"></i>
                     <i class="fa fa-pencil text-gray fa-3x d-none d-xl-inline-block"></i>
                  </p>

                  <p class="font-w600 font-size-sm text-uppercase">Profile</p>
               </div>
            </a>
         </div>

         <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-rounded text-center" href="/student/create">
               <div class="block-content">
                  <p class="mt-5 mb-10">
                     <i class="fa fa-user-plus text-gray fa-2x d-xl-none"></i>
                     <i class="fa fa-user-plus text-gray fa-3x d-none d-xl-inline-block"></i>
                  </p>
                  <p class="font-w600 font-size-sm text-uppercase">Add Student</p>
               </div>
            </a>
         </div>

         <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-rounded text-center" href="/payment/create">
               <div class="block-content">
                  <p class="mt-5 mb-10">
                     <i class="fa fa-money text-gray fa-2x d-xl-none"></i>
                     <i class="fa fa-money text-gray fa-3x d-none d-xl-inline-block"></i>
                  </p>
                  <p class="font-w600 font-size-sm text-uppercase">Add Payment</p>
               </div>
            </a>
         </div>

         <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-rounded text-center" href="/payables">
               <div class="block-content">
                  <p class="mt-5 mb-10">
                     <i class="fa fa-credit-card text-gray fa-2x d-xl-none"></i>
                     <i class="fa fa-credit-card text-gray fa-3x d-none d-xl-inline-block"></i>
                  </p>
                  <p class="font-w600 font-size-sm text-uppercase">Add Payable</p>
               </div>
            </a>
         </div>

         <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-rounded text-center" href="javascript:void(0)">
               <div class="block-content">
                  <p class="mt-5 mb-10">
                     <i class="fa fa-address-card text-gray fa-2x d-xl-none"></i>
                     <i class="fa fa-address-card text-gray fa-3x d-none d-xl-inline-block"></i>
                  </p>
                  <p class="font-w600 font-size-sm text-uppercase">Add Fine</p>
               </div>
            </a>
         </div>

         <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-rounded text-center" href="/waiver">
               <div class="block-content">
                  <p class="mt-5 mb-10">
                     <i class="fa fa-plus-square-o text-gray fa-2x d-xl-none"></i>
                     <i class="fa fa-plus-square-o text-gray fa-3x d-none d-xl-inline-block"></i>
                  </p>
                  <p class="font-w600 font-size-sm text-uppercase">Add Waiver</p>
               </div>
            </a>
         </div>
      </div>
   </div>

   <div class="content">
      <div class="row invisible" data-toggle="appear">
         <div class="col-md-3">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
               <div class="block-content block-content-full">
                  <div class="py-20 text-center">
                     <div class="mb-10">
                        <i class="fa fa-user-circle-o fa-3x text-corporate"></i>
                     </div>
                     <div class="font-size-h4 font-w600">Students</div>
                     <div class="text-muted">2 were added today!</div>
                  </div>
               </div>
            </a>
         </div>

         <div class="col-md-3">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
               <div class="block-content block-content-full">
                  <div class="py-20 text-center">
                     <div class="mb-10">
                        <i class="fa fa-paypal fa-3x text-primary"></i>
                     </div>

                     <div class="font-size-h4 font-w600">Tution Fee</div>
                     <div class="text-muted">Pending for tomorrow.</div>
                  </div>
               </div>
            </a>
         </div>

         <div class="col-md-3">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
               <div class="block-content block-content-full">
                  <div class="py-20 text-center">
                     <div class="mb-10">
                        <i class="fa fa-money fa-3x text-elegance"></i>
                     </div>
                     <div class="font-size-h4 font-w600">Paid</div>
                     <div class="text-muted">4 are Paid today!</div>
                  </div>
               </div>
            </a>
         </div>

         <div class="col-md-3">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
               <div class="block-content block-content-full">
                  <div class="py-20 text-center">
                     <div class="mb-10">
                        <i class="fa fa-calendar fa-3x text-elegance"></i>
                     </div>
                     <div class="font-size-h4 font-w600">Unpaid</div>
                     <div class="text-muted">4 are Unpaid!</div>
                  </div>
               </div>
            </a>
         </div>
      </div>

      <!-- Patients -->
      <div class="block block-rounded block-bordered invisible" data-toggle="appear">
         <div class="block-header block-header-default">
            <h3 class="block-title">Current Transaction</h3>
            <div class="block-options">
               <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
               </button>
               <button type="button" class="btn-block-option">
                  <i class="si si-wrench"></i>
               </button>
            </div>
         </div>

            <div class="block-content block-content-full">
               <div class="table-responsive">
                  <table class="table table-borderless table-hover table-striped table-vcenter mb-0">
                     <thead>
                        <tr>
                           <th>SL</th>
                           <th>Student</th>
                           <th>Semester</th>
                           <th>Amount</th>
                           <th>Head</th>
                           <th>Transaction Type</th>
                           <th>Payment Type</th>
                           <th>Created at</th>
                           <th>Action</th>
                        </tr>
                     </thead>

                     <tbody>



                        @foreach ($payments as $payment)
                        <tr>
                           <td>{{ $payment->id }}</td>
                           <td>{{ $payment->student_id }}</td>
                           <td>{{ $payment->semester }}</td>
                           <td>{{ $payment->amount }}</td>
                           <td>{{ $payment->head_id }}</td>
                           <td>
                              <span class="badge badge-info">{{ $payment->transaction_type }}</span>
                           </td>
                           <td>{{ $payment->payment_type }}</td>
                           <td>{{ $payment->created_at }}</td>
                           <td class="text-center">
                              <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                 <i class="fa fa-pencil"></i>
                              </button>
                           </td>
                        </tr>
                        @endforeach


                     </tbody>
                  </table>
               </div>
            </div>
        </div>
        <!-- END Patients -->



        <!-- Payments -->
        <div class="block block-rounded block-bordered invisible" data-toggle="appear">
            <div class="block-header block-header-default">
               <h3 class="block-title">Open Payables</h3>
               <div class="block-options">
                  <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                     <i class="si si-refresh"></i>
                  </button>
                  <button type="button" class="btn-block-option">
                     <i class="si si-wrench"></i>
                  </button>
               </div>
            </div>

            <div class="block-content block-content-full">
               <div class="table-responsive">
                  <table class="table table-borderless table-hover table-striped table-vcenter mb-0">
                     <thead>
                        <tr>
                           <th style="width: 100px;">ID</th>
                           <th>Department</th>
                           <th>Semester</th>
                           <th>Session</th>
                           <th>Paid</th>
                           <th>Unpaid</th>
                           <th>Actions</th>
                        </tr>
                     </thead>

                     <tbody>
                        <tr>
                           <td>
                              <a class="font-w600" href="#">241</a>
                           </td>

                           <td>
                              <a href="#">Computer</a>
                           </td>

                           <td>
                              <a href="#">1st</a>
                           </td>

                           <td>
                              <a href="#">2014-15</a>
                           </td>

                           <td>
                              <span class="badge badge-primary">50</span>
                           </td>

                           <td>
                              <span class="badge badge-danger">5400</span>
                           </td>

                           <td>
                              <a class="btn btn-success" href="#">
                                 <i class="fa fa-pencil-square-o text-white"></i>
                              </a>
                              <a class="btn btn-info" href="#">
                                 <i class="fa fa-eye text-white"></i>
                              </a>

                              <a class="btn btn-danger" href="#">
                                 <i class="fa fa-trash-o text-white"></i>
                              </a>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <!-- END Payments -->

         <div class="row">
            <!-- <div class="col-xl-6">
               <div class="block">
                  <div class="block-header block-header-default">
                     <h3 class="block-title">Paid / Unpaid (Current Semester)</h3>
                     <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                           <i class="si si-refresh"></i>
                        </button>
                     </div>
                  </div>

                  <div class="block-content block-content-full">
                     <div class="js-flot-bars" style="height: 340px; padding: 0px; position: relative;">
                        <canvas class="flot-base" width="480" height="340" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 480.5px; height: 340px;"></canvas>
                        <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                           <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;">
                              <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 40px; top: 323px; left: 43px; text-align: center;">CMT</div>

                              <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 40px; top: 323px; left: 79px; text-align: center;">AIDT</div>

                              <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 40px; top: 323px; left: 115px; text-align: center;">Civil</div>

                              <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 40px; top: 323px; left: 153px; text-align: center;">ELEC</div>

                              <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 40px; top: 323px; left: 188px; text-align: center;">TELE</div>

                              <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 40px; top: 323px; left: 227px; text-align: center;">TEXT</div>

                              <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 40px; top: 323px; left: 266px; text-align: center;">GDPM</div>

                              <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 40px; top: 323px; left: 298px; text-align: center;">T & H</div>
                           </div>

                           <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;">

                              <div class="flot-tick-label tickLabel" style="position: absolute; top: 310px; left: 28px; text-align: right;">0</div>

                              <div class="flot-tick-label tickLabel" style="position: absolute; top: 155px; left: 7px; text-align: right;">5000</div>

                              <div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 0px; text-align: right;">10000</div>
                           </div>
                        </div>

                        <canvas class="flot-overlay" width="480" height="340" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 480.5px; height: 340px;"></canvas>

                        <div class="legend">
                           <table style="position:absolute;top:14px;left:45px;;font-size:smaller;color:#545454">
                              <tbody>
                                 <tr>
                                    <td class="legendColorBox">
                                       <div style="border:1px solid #ccc;padding:1px">
                                          <div style="width:4px;height:0;border:5px solid rgb(239,83,80);overflow:hidden">
                                          </div>
                                       </div>
                                    </td>
                                    <td class="">Unpaid</td>
                                 </tr>

                                 <tr>
                                    <td class="legendColorBox">
                                       <div style="border:1px solid #ccc;padding:1px">
                                          <div style="width:4px;height:0;border:5px solid rgb(156,204,101);overflow:hidden"></div>
                                       </div>
                                    </td>

                                    <td class="">Paid</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div> -->

            <div class="col-xl-6">
               <div class="block">
                 <div class="block-header block-header-default">
                     <h3 class="block-title">Paid / Unpaid (Current Semester)</h3>
                     <div class="block-options">
                         <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                             <i class="si si-refresh"></i>
                         </button>
                     </div>
                 </div>
                  <div class="block-content block-content-full text-center" style="padding-top: 50px;padding-bottom: 85px;">
                     <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                           <div class=""></div>
                        </div>

                        <div class="chartjs-size-monitor-shrink">
                           <div class=""></div>
                        </div>
                     </div>

                     <!-- Bars Chart Container -->
                     <canvas class="js-chartjs-bars chartjs-render-monitor" width="481" height="240" style="display: block; width: 481px; height: 240px;">

                     </canvas>
                  </div>
               </div>
            </div>


            <div class="col-xl-6">
                <div class="block">

                    <div class="block-header block-header-default">
                        <h3 class="block-title">Technology</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>


                    <div class="block-content block-content-full">
                        <div class="js-flot-pie" style="height: 340px; padding: 0px; position: relative;">
                            <canvas class="flot-base" width="480" height="340" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 480.5px; height: 340px;"></canvas>

                            <canvas class="flot-overlay" width="480" height="340" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 480.5px; height: 340px;">

                            </canvas>

                            <div class="pieLabelBackground" style="position: absolute; width: 48.5156px; height: 46px; top: 46px; left: 266.992px; background-color: rgb(0, 0, 0); opacity: 0.75;">
                            </div>

                            <span class="pieLabel" id="pieLabel0" style="position: absolute; top: 46px; left: 266.992px;">
                                <div class="flot-pie-label">Sales<br>15%</div>
                            </span>
                            <div class="pieLabelBackground" style="position: absolute; width: 57.9844px; height: 46px; top: 119px; left: 321.258px; background-color: rgb(0, 0, 0); opacity: 0.75;">

                            </div>

                            <span class="pieLabel" id="pieLabel1" style="position: absolute; top: 119px; left: 321.258px;">
                                <div class="flot-pie-label">Tickets<br>12%</div>
                            </span>

                            <div class="pieLabelBackground" style="position: absolute; width: 68.7656px; height: 46px; top: 222px; left: 120.867px; background-color: rgb(0, 0, 0); opacity: 0.75;">

                            </div>
                            <span class="pieLabel" id="pieLabel2" style="position: absolute; top: 222px; left: 120.867px;">
                                <div class="flot-pie-label">Earnings<br>73%</div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->

<style type="text/css">
   .table thead th{

      text-transform: capitalize !important;
   }
</style>

@endsection
