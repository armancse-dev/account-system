@extends('dashboard.layouts.backend')

@section('content')
<div class="content">
   <div class="block">
      <div class="block-header block-header-default">
         <h3 class="block-title">Payable Student Information</h3>
      </div>

      <div class="block-content block-content-full">
         <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

            <div class="row">
               <div class="col-sm-12">
                  <table id="example" class="display nowrap" cellspacing="0"style="width:100%">
                     <thead>
                        <tr>
                           <th>All</th>
                           <th>Roll</th>
                           <th>Department</th>
                           <th>Semester</th>
                           <th>Session Year</th>
                           <th>Fine(Attendance)</th>
                           <th>Fine(Payable)</th>
                           <th>Status</th>
                           <th>Actions</th>
                        </tr>
                     </thead>

                     <tbody>
                        <tr>
                            <td>

                            </td>
                           <td>28744</td>
                           <td>com</td>
                           <td>1st</td>
                           <td>2020-21</td>
                           <td>541</td>
                           <td>200</td>
                           <td>
{{--                              <span class="badge bg-success "> &nbsp Paid &nbsp &nbsp</span>--}}
                              <span class="badge bg-danger">Unpaid</span>
                           </td>
                           <td>
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

{{--@push('custom-css')--}}
{{--    @toastr_css--}}
{{--@endpush--}}

{{--@push('custom-js')--}}
{{--    @toastr_js--}}
{{--    @toastr_render--}}
{{--@endpush--}}
