@extends('dashboard.layouts.backend')

@section('content')
<div class="content">
	<div class="block">
         <div class="block-header block-header-default">
            <h3 class="block-title">Payment Table</h3>
         </div>

        	<div class="col-md-12 mt-3">
                <a class="float-right" href="/payment/create" >
                   <button type="button" class="btn btn-success mr-5 mb-5">
                      <i class="fa fa-plus mr-5"></i>Add Payment
                   </button>
                </a>
        	</div>

         <div class="block">
            <div class="block-content block-content-full">

                <table class="table-striped  js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Student</th>
                            <th>Semester</th>
                            <th>Head</th>
                            <th>Amount</th>
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
                           <td>{{ $payment->student->roll }}</td>
                           <td class="text-center">{{ $payment->semester->name}}</td>
                            <td>{{ $payment->head->name}}</td>
                           <td>{{ $payment->amount }}</td>
                           <td>

                             @if($payment->transaction_type == 'debit')
                                   <span class="badge badge-danger">{{ $payment->transaction_type }}</span>
                             @else
                                   <span class="badge badge-info">{{ $payment->transaction_type }}</span>
                             @endif




                           </td>
                           <td>
                              <span class="badge badge-secondary">
                                {{ $payment->payment_type }}</span>
                           </td>
                           <td>{{ $payment->created_at }}</td>
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
                        @endforeach

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
