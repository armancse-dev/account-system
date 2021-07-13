@extends('dashboard.layouts.backend')
@section('content')
<div class="content">
  @php
    $balance_debit=collect([]);
    $balance_credit=collect([]);


@endphp


  <div class="block">
      <div class="block-header block-header-default">
         <h3 class="block-title">Students Details Table</h3>
      </div>
      <div class="block-content block-content-full">
         <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
               <div class="col-sm-12 col-md-12">
                  <a class="float-right" href="/student/create" >
                    <button type="button" class="btn btn-success mr-5 mb-5">
                        <i class="fa fa-plus mr-5"></i>Add Student
                     </button>
                  </a>
               </div>
            </div><br>

            <div class="row">
               <div class="col-sm-12">
                  <table id="example" class="display nowrap" cellspacing="0" style="width:100%">
                     <thead>
                        <tr>
                          <th>SL</th>
                          <th>Name</th>
                          <th>Roll</th>
{{--                          <th>Registration</th>--}}
{{--                          <th>Semester</th>--}}
{{--                          <th>Technology</th>--}}
{{--                          <th>Session</th>--}}
                          <th>Debit</th>
                          <th>Credit</th>
                          <th>Balance</th>
                          <th>Action</th>
                        </tr>
                     </thead>

                     <tbody>

                        <tr>
                           <td>1</td>
                           <td>name</td>
                           <td>2342424</td>

                           <td>
                              <span class="badge badge-danger">Admission fee- 2500</span><br>
                              <span class="badge badge-info">Admission fee- 2500</span><br>
                              <span class="badge badge-danger">Admission fee- 2500</span>
                           </td>

                           <td>
                               <span class="badge badge-success">Admission fee- 2500</span><br>
                               <span class="badge badge-success">Admission fee- 2500</span>
                           </td>
                            <td>
                                <span class="h2">-4000</span>
                            </td>

                           <td>
                              <div class="btn-group-sm" role="group">
                                 <a class="btn btn-success" href="#">
                                    <i class="fa fa-pencil-square-o text-white"></i>
                                 </a>

                                 <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o text-white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>1</td>
                           <td>name</td>
                           <td>2342424</td>

                           <td>
                              <span class="badge badge-danger">Admission fee- 2500</span><br>
                              <span class="badge badge-info">Admission fee- 2500</span><br>
                              <span class="badge badge-danger">Admission fee- 2500</span>
                           </td>

                           <td>
                               <span class="badge badge-success">Admission fee- 2500</span><br>
                               <span class="badge badge-success">Admission fee- 2500</span>
                           </td>
                            <td>
                                <span class="h2">-4000</span>
                            </td>

                           <td>
                              <div class="btn-group-sm" role="group">
                                 <a class="btn btn-success" href="#">
                                    <i class="fa fa-pencil-square-o text-white"></i>
                                 </a>

                                 <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o text-white"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>1</td>
                           <td>name</td>
                           <td>2342424</td>

                           <td>

                              <span class="badge badge-danger">Admission fee- 2500</span>
                           </td>

                           <td>
                               <span class="badge badge-success">Admission fee- 2500</span><br>
                               <span class="badge badge-success">Admission fee- 2500</span>
                           </td>
                            <td>
                                <span class="h2">0</span>
                            </td>

                           <td>
                              <div class="btn-group-sm" role="group">
                                 <a class="btn btn-success" href="#">
                                    <i class="fa fa-pencil-square-o text-white"></i>
                                 </a>

                                 <a class="btn btn-danger" href="#">
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
