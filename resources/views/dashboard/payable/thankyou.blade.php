@extends('dashboard.master.master')

@php
    use App\SessionYear;
    use App\Technology;
    use  App\Subject;
    use App\TechnologySubject;
    use App\Student;
@endphp

@section('main-content')
<div class="container-fluid">
   <div class="animated fadeIn">
	   <div class="row">
	    <h3> Successfully Updated !!</h3>
           <button onclick="goBack()">Go Back</button>

           <script>
               function goBack() {
                   window.history.back();
               }
           </script>
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
