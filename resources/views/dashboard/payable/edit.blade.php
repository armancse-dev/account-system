@extends('dashboard.master.master')

{{--@php--}}
{{--    use App\SessionYear;--}}
{{--    use App\Technology;--}}
{{--    use  App\Subject;--}}
{{--    use App\TechnologySubject;--}}
{{--    use App\Student;--}}
{{--@endphp--}}

@section('main-content')
<div class="container-fluid">
   <div class="animated fadeIn">
	   <div class="row">
	      <div class="col-lg-10">
		      <div class="card">
		         <div class="card-header">
   	                <i class="fa fa-align-justify"></i> Student Information
		         </div>

                  <form method="post" action="{{route('account-student.update',$data['id'])}}">
                      @method('PATCH')
                      @csrf
                      <div class="card-body">
                          <div class="row  my-2">
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="roll"><b>Roll : </b> </label> <input name="roll" class="form-control" type="text" value="{{$data->student->roll}}" readonly>
                                  </div>
                              </div>
                              <div class="form-group col-sm-6">
                                  <div class="form-group">
                                      <label for="roll"><b>Technology : </b></label>
                                      <input type="text" name="technology" id="" readonly="true" class="form-control" value="{{$data->student->technology->name}}">
                                  </div>
                              </div>
                          </div>
                          <!--/.row-->
                          <div class="row">
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="semester"><b>Semester:</b> </label>
                                      <input name="semester" class="form-control" type="text" value="{{$data->student->semester}}" readonly>
                                  </div>
                              </div>

                              <div class="form-group col-sm-6">
                                  <label for="session"><b>Session : </b> </label>
                                  <input type="text" name="session_year" id="" readonly="true" class="form-control" value="{{$data->student->session->session_year}}">
                              </div>

                              <div class="col-sm-6">
                                  <label for="session"><b>Status : </b> </label>

                                  <input class="ml-3" type="radio" name="status" value="1" {{($data->status == 1?'checked':'')}} >Paid
                                  <input class="ml-3" type="radio" name="status" value="0" {{($data->status == 0?'checked':'')}} >Unpaid <br>
                              </div>
                                  <button class="col-sm-12 mt-4 col-offset-sm-4 btn btn-success">Update Student</button>
                          </div>

                      </div>
                  </form>
		      </div>
	      </div>
	  </div>
  </div>
</div>



<style type="text/css">
   .switch-danger .switch-input:checked + .switch-slider::before{
      margin-left: 22px;
   }
   .switch-label{
      width: 72px;
   }
   .switch-success .switch-input:checked + .switch-slider::before{
      margin-left: 22px;
   }

   .switch-label .switch-slider::after{
      width: 62% !important;
   }
   .switch-label .switch-slider::after{
      color: #000000 !important;
   }
   .switch-slider{
      /*background-color: #F86C6B !important;*/
      border: none;
   }


</style>

<script type="text/javascript">

$(document).ready(function() {
    $('#example').DataTable( {
        // "scrollY": 400,
        "scrollX": true
    } );
} );



</script>



@endsection
