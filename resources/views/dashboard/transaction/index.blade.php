@extends('dashboard.layouts.backend')

@section('content')

<div class="content">
    <div class="row">

        <div class="block-content block-content-full bg-white">

            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                <div class="row">

                    <div class="col-sm-12 col-md-12">
                        <a class="float-right" href="/transactions/create" >
                            <button class="btn btn-success">Add Transactions</button>
                        </a>
                    </div>
                </div><br>
                

                <div class="row">
                    <div class="col-sm-12">
                        <table id="example" class="display nowrap" cellspacing="0"style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Student Name</th>
                                    <th>Technology</th>
                                    <th>Semester</th>
                                    <th>Payment Schema</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>{{ $transaction->student_id }}</td>
                                    <td></td>
                                    <td>{{ $transaction->technology_id }}</td>
                                    <td>{{ $transaction->semester_id }}</td>
                                    <td>{{ $transaction->paymentschema_id }}</td>
                                    <td>{{ $transaction->amount }}</td>
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
                                   <th>Sl</th>
                                    <th>Student Name</th>
                                    <th>Student Roll</th>
                                    <th>Payable</th>
                                    <th>Paid</th>
                                    <th>Amount</th>
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