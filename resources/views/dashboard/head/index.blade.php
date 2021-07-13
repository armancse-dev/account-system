@extends('dashboard.layouts.backend')

@section('content')
<div class="content">
	<div class="block">
         <div class="block-header block-header-default">
            <h3 class="block-title">Schema Master Table</h3>
         </div>

        	<div class="col-md-12 mt-3">
        		<a class="float-right" href="/head/create" >
            	   <button type="button" class="btn btn-success mr-5 mb-5">
                    <i class="fa fa-plus mr-5"></i>Add Head
                    </button>
                </a>
        	</div>

         <div class="block">
            <div class="block-content block-content-full">

                <table id="example" class="display nowrap" cellspacing="0" style="width:100%">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($heads as $head)
                        <tr>
                            <td>{{ $head->id }}</td>
                            <td>{{ $head->name}}</td>
                            <td>{{ $head->created_at}}</td>



                            <td class="text-center">
                                <div class="btn-group-sm">
                                    <a class="btn btn-success" href="#">
                                        <i class="fa fa-pencil-square-o text-white"></i>
                                    </a>
                                    {{--                              <a class="btn btn-info" href="#">--}}
                                    {{--                                 <i class="fa fa-eye text-white"></i>--}}
                                    {{--                              </a>--}}
                                    <a class="btn btn-danger" href="#">
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
