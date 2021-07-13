@extends('dashboard.layouts.backend')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8 mx-auto d-block">


                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session()->has('msg'))
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="alert-heading font-size-h4 font-w400">Success</h3>
                        <p class="mb-0"> {{session()->get('msg')}} </p>
                    </div>
                @endif

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-xl-6 mx-auto">
                <div class="block block-themed">
                        <div class="block-header bg-info">
                            <h3 class="block-title">Month Table</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form action="{{route('months.store')}}" method="post">

                                @csrf
                                <div class="form-group row">
                                    <div class="col-12">
                                         <div class="form-material floating">
                                        <input type="text" class="form-control" id="name" name="name">
                                        <label for="name">Enter Month Name</label>
                                    </div>
                                    </div>
                                </div>

                               
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-info">
                                            <i class="fa fa-send mr-5"></i>Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>

        <div class="block-content block-content-full bg-white">

            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                

                <div class="row">
                    <div class="col-sm-12">

                        <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Month Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            
                            <tbody>

                                @foreach ($months as $month)
                                <tr>
                                    <td>{{ $month->id }}</td>
                                    <td>{{ $month->name }}</td>
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
                                    <th>Month Name</th>
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