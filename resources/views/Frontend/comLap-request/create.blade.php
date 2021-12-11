@extends('layouts.frontend')
@section('main')


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div style="margin-top: 30px">
            @if(session()->has('message'))
            <div class="alert alert-success mt-3">
                {{ session()->get('message') }}
            </div>
            @endif
        </div>


<div class="row">
    <form class="form-inline" action="#" method="post">
    <h3 class="text-center">Computer Request Form</h3>
    <p class="text-center">To apply for a Computer or Laptop please fill out the form and click the Apply button.<br> (<span
            style="color: red">*</span>) Marks field are mandatory!</p>



<div class="form-group">
    <div class="form-group">

                    @csrf

                    <div class="form-group has-success has-feedback">
                        <label class="col-md-5 control-label" for="inputSuccess">Employee ID</label>
                        <div class="col-md-3">
                            <input type="text" name="emp_id" id="inputSuccess" class="form-control" placeholder="Write your nick name">
                        </div>
                    </div>

                        <div class="form-group has-success has-feedback">
                            <label class="col-md-5 control-label" for="inputSuccess">Full Name<span style="color: red">*</span></label>
                            <div class="col-md-3">
                                <input type="text" name= "emp_name" id="inputSuccess" class="form-control" placeholder="Write your full official name">
                            </div>
                        </div>

                            <div class="form-group has-success has-feedback">
                                <label class="col-xs-5 control-label" for="inputSuccess">Designation<span style="color: red">*</span></label>
                                <div class="col-xs-3">
                                    <input type="text" name="designation" id="inputSuccess" class="form-control"
                                        placeholder="Write your designation">
                                </div>
                            </div>

                            <div class="form-group has-success has-feedback">
                                <label class="col-xs-5 control-label" for="inputSuccess">Department<span style="color: red">*</span></label>
                                <div class="col-xs-3">
                                    <input type="text" name="department" id="inputSuccess" class="form-control"
                                        placeholder="Write your department name">
                                </div>
                            </div>


                            <div class="form-group has-success has-feedback">
                                <label class="col-xs-5 control-label" for="inputSuccess">Section</label>
                                <div class="col-xs-3">
                                    <input type="text" name="section" id="inputSuccess" class="form-control" placeholder="Write your section name">
                                </div>
                            </div>


                            <div class="form-group has-success has-feedback">
                                <label class="col-xs-5 control-label" for="inputSuccess">Date of Join<span style="color: red">*</span></label>
                                <div class="col-xs-3">
                                    <input type="date" name="doj" id="inputSuccess" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group has-success has-feedback">
                                <label class="col-xs-5 control-label" for="inputSuccess">Report to</label>
                                <div class="col-xs-3">
                                    <input type="text" name="report_to" id="inputSuccess" class="form-control" placeholder="Write your reporting Boss/Head">
                                </div>
                            </div>


                            <div class="form-group has-success has-feedback">
                                <label class="col-xs-5 control-label" for="inputSuccess">Mobile No.<span style="color: red">*</span></label>
                                <div class="col-xs-3">
                                    <input type="text" name="mobile" id="inputSuccess" class="form-control" placeholder="Contact no. as per your CV">
                                </div>
                            </div>


                            <div style="border: 1px solid black">

                                <h3>Current Hardware Details</h3>

                                    What is your current Computer type?<br>

                                    <div class="radio-inline">
                                        <input type="radio" id="Desktop" name="current_comp" value="Desktop">
                                          <label >Desktop</label>
                                    </div>

                                    <div class="radio-inline">
                                        <input type="radio" id="Laptop" name="current_comp" value="Laptop">
                                          <label for="html" >Laptop</label>
                                    </div>

                                    <div class="radio-inline">
                                        <input type="radio" id="No" name="current_comp" value="No">
                                          <label>No</label>
                                    </div>

                                    <div>
                                         Has an IT Person looked at your Old computer recently?<br>
                                        <label class="checkbox-inline"><input type="checkbox" name="is_checked" value="Yes">Yes</label>
                                        <label class="checkbox-inline"><input type="checkbox" name="is_checked"  value="No">No</label>
                                        </div>

                                        <div>
                                            Why are you seeking new Computer?<br>
                                            <div class="checkbox">
                                            <label ><input type="checkbox" name="required_for" value="My computer no longer at all">My computer no longer at all</label>
                                            </div>

                                            <div class="checkbox">
                                            <label ><input type="checkbox" name="required_for" value="My computer is outdated and cannot be upgraded">My computer is outdated and cannot be upgraded</label>
                                            </div>

                                            <div class="checkbox">
                                            <label ><input type="checkbox" name="required_for" value="I need more powerfull for special works">I need more powerfull for special works</label>
                                        </div>

                                        <div class="checkbox">
                                            <label><input type="checkbox" name="required_for" value="My computer runs slow">My computer runs slow </label>
                                        </div>

                                        <div class="checkbox">
                                                <label><input type="checkbox" name="required_for" value="I need portability">I need portability </label>
                                            </div>


                                            <label>Others (Please specify)
                                            <textarea class="form-control" name="required_for" rows="3" ></textarea></label>

                                        </div>
                                    </div>


                                    <div style="border: 1px solid black">

                                        <h3>Specify your new requirement</h3>

                                        What type of Computer/accessories are you requesting?<br>

                                        <div class="radio-inline">
                                            <input type="radio" id="Desktop" name="device_type" value="Desktop">
                                              <label>Desktop</label>
                                        </div>

                                        <div class="radio-inline">
                                            <input type="radio" id="Laptop" name="device_type" value="Laptop">
                                              <label for="html">Laptop</label>
                                        </div>

                                        <div class="radio-inline">
                                            <input type="radio" id="Mobile" name="device_type" value="Mobile">
                                              <label>Mobile</label>
                                        </div>

                                        <div class="radio-inline">
                                            <input type="radio" id="Tab" name="device_type" value="Tab">
                                              <label>Tab</label>
                                        </div>


                                        <div class="radio-inline">
                                            <input type="radio" id="Modem" name="device_type" value="Modem">
                                              <label>Modem</label>
                                        </div>

                                        <div class="radio-inline">
                                            <input type="radio" id="Mac" name="device_type" value="Mac">
                                              <label>Mac</label>
                                        </div>

                                        <div>
                                            What you will primary use this computer for?<br>
                                            <label class="checkbox-inline"><input type="checkbox" name="primary_use" value="Email">Email</label>
                                            <label class="checkbox-inline"><input type="checkbox" name="primary_use" value="Document">Document</label>
                                            <label class="checkbox-inline"><input type="checkbox" name="primary_use" value="Management Report">Management Report</label>
                                            <label class="checkbox-inline"><input type="checkbox" name="primary_use" value="Data Entry">Data Entry</label>
                                            <label class="checkbox-inline"><input type="checkbox" name="primary_use" value="Design">Design</label>
                                            <label class="checkbox-inline"><input type="checkbox" name="primary_use" value="CAD">CAD</label>
                                            <label class="checkbox-inline"><input type="checkbox" name="primary_use" value="Database">Database</label>
                                            <label class="checkbox-inline"><input type="checkbox" name="primary_use" value="Server">Server</label>
                                            <label class="checkbox-inline"><input type="checkbox" name="primary_use" value="Special works">Special works</label>
                                        </div>

                                            <label>List any other request that you prefer or require?
                                                <textarea class="form-control" name="required_for" rows="3" placeholder="Monitor/Screen Size, Storage Size, RAM Size, Processor model, Software etc."></textarea></label>

                                        </div>
                                    </div>



                            <div class="form-group has-success has-feedback">
                                <label class="col-xs-4 control-label" for="inputSuccess">Referrence<span style="color: red">*</span></label>
                                <div class="col-xs-8">
                                    <input type="text" name="referred_by" id="inputSuccess" class="form-control">
                                </div>
                            </div>

                        </div>





                            <div class="bg-light text-right">
                            <button type="submit" class="btn btn-success">Apply</button>
                            </div>
                                </div>
                            </form>
                        </div>






@endsection
