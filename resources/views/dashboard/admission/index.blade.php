@extends('dashboard.layouts.backend')

@section('content')
<div class="content">
	<div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Admission Table</h3>
        </div>
        <div class="block-content block-content-full">

            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            	<div class="row">

            		<div class="col-sm-12 col-md-12">
            			<a class="float-right" href="/admissions/create" >
            				<button class="btn btn-success">Add Admission</button>
            			</a>
            		</div>
            	</div><br>

	            <div class="row">
		            <div class="col-sm-12">

		            	<table id="example" class="display nowrap" cellspacing="0"style="width:100%">
					        <thead>
					            <tr>
					                <th>SL</th>
			                    	<th>Name</th>
			                    	<th>Roll</th>
			                    	<th>Registration</th>
			                    	<th>Semester</th>
			                    	<th>Technology</th>
			                    	<th>Session</th>
			                    	<th>Action</th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr>
					                <td>1</td>
			                        <td>Brian Stevens</td>
			                        <td>85455</td>
			                        <td>24454</td>
			                        <td>1st</td>
			                        <td>Computer</td>
			                        <td>2014-15</td>
			                       
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
					        <tfoot>
					            <tr>
					                <th>SL</th>
			                    	<th>Name</th>
			                    	<th>Roll</th>
			                    	<th>Registration</th>
			                    	<th>Semester</th>
			                    	<th>Technology</th>
			                    	<th>Session</th>
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