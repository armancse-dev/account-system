@extends('dashboard.layouts.backend')

@section('content')
<div class="content">
	<div class="block">
      <div class="block-header block-header-default">
         <h3 class="block-title">By Technology Table</h3>
      </div>
      <div class="row">
         <div class="col-6 text-center">
            <div class="table-responsive">
               <table class="table table-bordered">
                  <tbody>
                  </tbody>
                  <thead>
                     <tr>
                        <td colspan="2">Technology Information</td>
                     </tr>
                  </thead>

                  <tbody>
                       
                     <tr>
                        <td>Technology </td>
                        <td class="text-left">Architecture &amp; Interior Design</td>
                     </tr>
                     <tr>
                        <td>Session Year </td>
                        <td class="text-left">2013-14</td>
                     </tr>
                     <tr>
                        <td>Semester </td>
                        <td class="text-left">2nd</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>

     	<!-- <div class="col-md-12 mt-3">
             <a class="float-right" href="/payment/create" >
                <button type="button" class="btn btn-success mr-5 mb-5">
                   <i class="fa fa-plus mr-5"></i>Add Payment
                </button>
             </a>
     	</div> -->

      <div class="block">
         <div class="block-content block-content-full">
            <table id="example" class="table-striped  n">
               <thead>
                  <tr>
                     <th>SL</th>
                     <th>Student</th>
                     <th>Amount</th>
                     <th>Admission</th>
                     <th>Paid</th>
                     <th>Waever</th>
                     <th>Amount after waever</th>
                     <th>Late fee</th>
                     <th>Semester Fee</th>
                     <th>Month</th>
                     <th>Balance</th>
                     <th>Created at</th>
                     <th>Action</th>
                  </tr>
               </thead>

               <tbody>

               
                  <tr>
                     <td>1</td>
                     <td>37800</td>
                     <td>18500</td>
                     <td>13200</td>
                     <td>13200</td>
                     <td></td>
                     <td>18500</td>
                     <td></td>
                     <td>9500</td>
                     <td>1500</td>
                     <td>2500</td>
                     <td>01-01-2020</td>
                     <td class="text-center">
                        <div class="btn-group" role="group">
                           <a class="btn btn-sm btn-success" href="#">
                              <i class="fa fa-pencil-square-o text-white"></i>
                           </a>

                           <a class="btn btn-sm btn-info" href="#">
                              <i class="fa fa-eye text-white"></i>
                           </a>

                           <a class="btn btn-sm btn-danger" href="#">
                              <i class="fa fa-trash-o text-white"></i>
                           </a>
                        </div>
                     </td>
                  </tr>
               
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    	$('#example').DataTable({
    		"scrollX": true

    	});
	} );
</script>

@endsection
