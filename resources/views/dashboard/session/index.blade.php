@extends('dashboard.layouts.backend')
@section('content')
<div class="content">
	<div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Session Table</h3>
        </div>
        <div class="block-content block-content-full">

            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            	<div class="row">

            		<div class="col-sm-12 col-md-12">
            			<a class="float-right" href="/sessions/create" >
			               <button type="button" class="btn btn-success mr-5 mb-5">
			                  <i class="fa fa-plus mr-5"></i>Add Session
			               </button>
			            </a>
            		</div>
            	</div><br>

	            <div class="row">
		            <div class="col-sm-12">

		            	<table id="example" class="display nowrap" style="width:100%">
					        <thead>
					            <tr>
					                <th>SL</th>
			                    	<th>Session Year</th>
			                    	<th>Action</th>
					            </tr>
					        </thead>
					        <tbody>

					        	@foreach ($sessions as $session)
					            <tr>
					                <td>{{ $session->id }}</td>
			                        <td>{{ $session->session_year }}</td>
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
					             @endforeach
					           
					        </tbody>
					        <tfoot>
					            <tr>
					                <th>SL</th>
			                    	<th>Session Year</th>
			                    	<th>Action</th>
					            </tr>
					        </tfoot>
   					 	</table>
		        	</div>
	        	</div>
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
