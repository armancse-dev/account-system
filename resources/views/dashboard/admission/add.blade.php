@extends('dashboard.layouts.backend')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">

             <div class="col-xl-8 mx-auto">
                

                <div class="block block-themed">
                    <div class="block-header bg-info">
                        <h3 class="block-title">Add Admission</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="{{route('admissions.store')}}" method="post">

                            @csrf
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">

                                       <input type="text" id="student_id" name="student_id" class="form-control" placeholder="Enter Name">

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="form-material floating">

                                       <input type="text" id="roll" name="roll" class="form-control" placeholder="Enter Roll">

                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-material floating">

                                       <input type="text" id="registration_no" name="registration_no" class="form-control" placeholder="Enter Registraion No">

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">

                                       <select class="form-control" id="semester_id" name="semester_id" size="1">
                                                <option selected="" disabled="">Select Semester</option>

                                                @foreach(Library::get_semesters() as $semester)

                                                
                                                <option value="{{$semester->id}}">
                                                    {{ucfirst($semester->name)}}
                                                </option>
                                                 @endforeach

                                            </select>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">

                                         <select class="form-control" id="session_id" name="session_id" size="1">
                                                <option selected="" disabled="">Select Session</option>

                                                @foreach(Library::get_sessions() as $session)


                                                <option value="{{$session->id}}">{{ucfirst($session->session_year)}}</option>

                                                @endforeach
                                                
                                            </select>
                                    </div>
                                </div>
                            </div>

                             <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating open">
                                        <select class="form-control" id="technology_id" name="technology_id" size="1">
                                            <option selected="" disabled="">Select Technology</option>

                                            @foreach(Library::get_technologies() as $technology)

                                            <option value="{{$technology->id}}">{{ucfirst($technology->name)}} {{ucfirst($technology->code)}}</option>



                                            @endforeach

                                           


                                        </select>
                                        
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">

                                        <input type="text" id="admission_fee" name="admission_fee" class="form-control" placeholder="Enter Admission Fee">

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
    </div>
</div>



@endsection