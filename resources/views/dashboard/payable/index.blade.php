@extends('dashboard.layouts.backend')

@section('content')

<div class="content">
   <div class="block">
      <div class="block-header block-header-default">
         <h3 class="block-title">Student Informations</h3>
      </div>

      <div class="block">
         <div class="block-content block-content-full">
            <form action="{{action('AdminPayableController@showGroup')}}" method="post">
               @csrf
               <div class="form-group row">
                  <div class="col-6">
                     <div class="form-material floating">

                        <select class="form-control" name="technology" id="technology" required>
                              <option value="" selected="" disabled="">Select Technology</option>
                            @foreach(Library::get_technologies() as $technology)
                                <option value="{{$technology->id}}">{{ucfirst($technology->name)}} (<strong>{{ucfirst($technology->code)}}</strong>)</option>
                            @endforeach

                          </select>
                     </div>
                  </div>

                  <div class="col-6">
                     <div class="form-material floating">
                        <select class="form-control" name="session" id="session" required>
                              <option value="" selected="" disabled="">Select Session</option>
                            @foreach(Library::get_sessions() as $session)
                                <option value="{{$session->id}}">{{ucfirst($session->session_year)}}</option>
                            @endforeach
                          </select>
                     </div>
                  </div>
               </div>

               <div class="form-group row">
                  <div class="col-6">
                     <div class="form-material floating">
                        <select class="form-control" name="semester" id="semester" required>
                           <option value="" selected="" disabled="">Select Semester</option>
                            @foreach(Library::get_semesters() as $semester)
                                <option value="{{$semester->id}}">
                                    {{ucfirst($semester->name)}}
                                </option>
                            @endforeach
                        </select>
                     </div>
                  </div>

                  <div class="col-6">
{{--                     <label class="col-12 mt-5 pt-5">Status</label>--}}

{{--                      <div class="custom-control custom-radio custom-control-inline mb-5">--}}
{{--                            <input class="custom-control-input" type="radio" name="status" id="paid" value="1" checked="">--}}
{{--                            <label class="custom-control-label" for="paid">Paid</label>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-radio custom-control-inline mb-5">--}}
{{--                            <input class="custom-control-input" type="radio" name="status" id="unpaid" value="0">--}}
{{--                            <label class="custom-control-label" for="unpaid">Unpaid</label>--}}
{{--                        </div>--}}
                  </div>
               </div>
               <div class="form-group row">
                    <div class="col-12">
                        <button type="submit" class="col-2 btn btn-info">
                            <i class="fa fa-send"></i> Submit
                        </button>
                    </div>
                </div>
            </form>

         </div>
      </div>

   </div>
</div>







@endsection


