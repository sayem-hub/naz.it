@extends('layouts.frontend')
@section('main')
<section class="contact-section pt-90">



        <div class="container">

                    <form class="row g-3" action="{{ route('comp.request.create') }}" method="post">
                        @csrf
                    <h4 class="text-center">Computer Request Form</h4>
                    <p class="text-center">To apply for a Computer or Laptop please fill out the form and click the Apply button.<br> (<span
                    style="color: red">*</span>) Marks field are mandatory!</p>


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



                    <div class="col-md-6">
                        <label for ="emp_id" class="form-label" >Employee ID</label>
                        <input type="text" class="form-control" name="emp_id" id="inputSuccess" class="form-control" placeholder="Write your office ID Card No.">
                    </div>

                        <div class="col-md-6">
                            <label for="emp_name" class="form-label">Full Name<span style="color: red">*</span></label>
                            <input type="text" class="form-control" name= "emp_name" id="inputSuccess" class="form-control" placeholder="Write your full official name">
                        </div>


                            <div class="col-md-6">
                                <label for="designation" class="form-label" >Designation<span style="color: red">*</span></label>
                                <input type="text" name="designation"  class="form-control" placeholder="Write your designation">
                            </div>

                            <div class="col-md-6">
                                <label for="department" class="form-label">Department<span style="color: red">*</span></label>
                                <input type="text" name="department" class="form-control" placeholder="Write your department">
                            </div>

                            <div class="col-md-6">
                                <label for="section" class="form-label">Section<span style="color: red">*</span></label>
                                <input type="text" name="section" class="form-control" placeholder="Write your section">
                            </div>

                            <div class="col-md-6">
                                <label for="doj" class="form-label">Date of Join<span style="color: red">*</span></label>
                                <input type="date" name="doj" id="inputSuccess" class="form-control" >
                            </div>

                            <div class="col-md-6">
                                <label for="report_to" class="form-label" >Report to</label>
                                 <input type="text" name="report_to" class="form-control" placeholder="Write your reporting Boss/Head">
                            </div>

                            <div class="col-md-6">
                                <label for="mobile" class="form-label" >Mobile No.<span style="color: red">*</span></label>
                                <input type="text" name="mobile" class="form-control" placeholder="Contact no. as per your CV">

                            </div>


                            <span class="border border-info">

                                <h4>Current Computer Details</h4>

                                    <b>What is your current Computer type?</b>

                                        <div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="Desktop" name="current_comp" value="Desktop">
                                          <label class="form-check-label">Desktop</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="Laptop" name="current_comp" value="Laptop">
                                          <label class="form-check-label" >Laptop</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="No" name="current_comp" value="No">
                                          <label class="form-check-label">No</label>
                                    </div>
                                    </div>

                                <div>
                                          <b>Has an IT Person looked at your Old computer recently?</b>
                                    <div>
                                    <div class="form-check form-check-inline">
                                        <label class="checkbox-inline">Yes</label>
                                        <input type="checkbox" class="form-check-input" name="is_checked" value="Yes">
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <label class="checkbox-inline">No</label>
                                        <input type="checkbox" class="form-check-input" name="is_checked"  value="No">
                                    </div>
                                    </div>
                                </div>

                                        <div>
                                            <b>Why are you seeking new Computer?</b>
                                         <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="reason_for[]" value="My computer no longer at all">
                                                 <label >My computer no longer at all</label>
                                            </div>

                                        <div class="form-check">
                                                 <input type="checkbox" class="form-check-input" name="reason_for[]" value="My computer is outdated and cannot be upgraded">
                                                 <label>My computer is outdated and cannot be upgraded</label>
                                            </div>

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="reason_for[]" value="I need more powerfull for special works">
                                            <label>I need more powerfull for special works</label>
                                        </div>

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="reason_for[]" value="My computer runs slow">
                                            <label>My computer runs slow </label>
                                        </div>

                                        <div class="form-check">
                                               <input type="checkbox" class="form-check-input" name="reason_for[]" value="I need portability">
                                               <label>I need portability </label>
                                         </div>



                                        </div>
                                    </span>


                                    <span  class="border border-info">

                                        <h4>Specify your new requirement</h4>

                                       <b> What type of Computer/accessories are you requesting?</b>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="Desktop" name="device_type" value="Desktop">
                                              <label class="form-check-label">Desktop</label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="Laptop" name="device_type" value="Laptop">
                                              <label for="html" class="form-check-label">Laptop</label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="Mobile" name="device_type" value="Mobile">
                                              <label class="form-check-label">Mobile</label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="Tab" name="device_type" value="Tab">
                                              <label class="form-check-label">Tab</label>
                                        </div>


                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="Modem" name="device_type" value="Modem">
                                              <label class="form-check-label">Modem</label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="Mac" name="device_type" value="Mac">
                                              <label class="form-check-label">Mac</label>
                                        </div>

                                        <div>
                                        <b>What you will primary use this computer for?</b>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox"  class="form-check-input" name="primary_use[]" value="Email">
                                            <label class="form-check-label">Email</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                          <input type="checkbox" class="form-check-input" name="primary_use[]" value="Document">
                                          <label class="form-check-label">Document</label>
                                        </div>

                                            <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" name="primary_use[]" value="Management Report">
                                            <label class="form-check-label">Management Report</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" name="primary_use[]" value="Data Entry">
                                            <label class="form-check-label">Data Entry</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" name="primary_use[]" value="Design">
                                            <label class="form-check-label">Design</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                           <input type="checkbox" class="form-check-input" name="primary_use[]" value="CAD">
                                           <label class="form-check-label">CAD</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" name="primary_use[]" value="Database">
                                            <label class="form-check-label">Database</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" name="primary_use[]" value="Server">
                                            <label class="form-check-label">Server</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" name="primary_use[]" value="Special works">
                                            <label class="form-check-label">Special works</label>
                                             </div>

                                             <div class="row">
                                                <div class="col-12">
                                                <textarea class="form-control" name="display_size" rows="2" placeholder="Monitor/Screen Size, Storage Size, RAM Size, Processor model, Software etc."></textarea>
                                                </div>
                                            </div>
                                    </span>

                                    <div class="row">
                                    <div class="col-12">
                                        <textarea class="form-control" name="accessories" rows="2"
                                            placeholder="Mention any other accessories if you need"></textarea>
                                    </div>
                                    </div>


                            <div class="col-md-12">
                                <label class="form-label">Referrence<span style="color: red">*</span></label>
                                <input type="text" name="referred_by" id="inputSuccess" class="form-control">
                                </div>


                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-success">Apply</button>
                            </div>

                            </form>


                        </form>

            </section>

@endsection
