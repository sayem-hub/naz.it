@extends('layouts.frontend')
@section('main')

    <section class="contact-section pt-130">

        <div class="container">

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-7 ">

                    <div class="card bg-info mb-2">
                        <div class="card-body">

                            <h4 class="card-title text-center">Update Record</h4>


                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div >
                                @if(session()->has('message'))
                                    <div class="alert alert-success mt-3">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                            </div>


                            <div class="card-body">

                                <form class="form" action="{{ route('nazdeptheads.edit', $nazDeptHeads->id) }}" method="post">
                                    @csrf

                                    <div class="form-group mb-2">
                                        <label class="col-xs-4 control-label" for="inputSuccess">Employee ID<span
                                                style="color: red">*</span></label>
                                        <div class="col-xs-8">
                                            <input type="text" name="emp_id" id="inputSuccess" class="form-control" value="{{$nazDeptHeads->emp_id}}">
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label class="col-xs-4 control-label" for="inputSuccess">Employee Name<span
                                                style="color: red">*</span></label>
                                        <div class="col-xs-8">
                                            <input type="text" name="employee_name" id="inputSuccess" class="form-control"
                                                   value="{{$nazDeptHeads->employee_name}}">
                                        </div>
                                    </div>



                                    <div class="form-group mb-2">
                                        <label class="col-xs-4 control-label" for="inputSuccess">Designation<span
                                                style="color: red">*</span></label>
                                        <div class="col-xs-8">
                                            <input type="text" name="designation" id="inputSuccess" class="form-control"
                                                   value="{{$nazDeptHeads->designation}}">
                                        </div>
                                    </div>



                                    <div class="form-group mb-2">
                                        <label class="col-xs-4 control-label" for="inputSuccess">Section</label>
                                        <div class="col-xs-8">
                                            <input type="text" name="section" id="inputSuccess" class="form-control"
                                                   value="{{$nazDeptHeads->section}}">
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label class="col-xs-4 control-label" for="inputSuccess">Department<span
                                                style="color: red">*</span></label>
                                        <div class="col-xs-8">
                                            <input type="text" name="department" id="inputSuccess" class="form-control"
                                                   value="{{$nazDeptHeads->department}}">
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label class="col-xs-4 control-label" for="inputSuccess">Email ID</label>
                                        <div class="col-xs-8">
                                            <input type="email" name="email_id" id="inputError" class="form-control"
                                                   value="{{$nazDeptHeads->email_id}}">

                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label class="col-xs-4 control-label" for="inputSuccess">Mobile No.<span
                                                style="color: red">*</span></label>
                                        <div class="col-xs-8">
                                            <input type="text" name="mobile" id="inputSuccess" class="form-control"
                                                   value="{{$nazDeptHeads->mobile}}">
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label class="col-xs-4 control-label" for="inputSuccess">Date of Join<span
                                                style="color: red">*</span></label>
                                        <div class="col-xs-8">
                                            <input type="date" name="doj" id="inputSuccess" class="form-control" value="{{$nazDeptHeads->doj}}">
                                        </div>
                                    </div>



                                    <div class="form-group mb-2">
                                        <label class="col-xs-4 control-label" for="inputSuccess">Status</label>
                                        <div class="col-xs-8">
                                            <select class="form-control" name="status">
                                                <option value="{{$nazDeptHeads->status}}" selected>{{$nazDeptHeads->status}}</option>
                                                <option value="Active">Active</option>
                                                <option value="Resigned">Resigned</option>
                                                <option value="Closed">Closed</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-success">Update</button>

                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
