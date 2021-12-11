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
    <h3 class="text-center">Email ID Opening Form</h3>
    <p class="text-center">To apply for an email account please fill out the form and click the Apply button.<br> (<span
            style="color: red">*</span>) Marks field are mandatory!</p>
    <div class="col-md-3"></div>

    <div class="col-md-6 offset-md-6">
        <div class="card">



            <div class="card-body">


                <form class="form-horizontal" action="{{ route('new.mail.form.create') }}" method="post">
                    @csrf


                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Full Name<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="full_name" id="inputSuccess" class="form-control"
                                placeholder="Write your full official name">
                        </div>
                    </div>


                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Nick Name</label>
                        <div class="col-xs-8">
                            <input type="text" name="nick_name" id="inputSuccess" class="form-control"
                                placeholder="Write your nick name">
                        </div>
                    </div>


                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Designation<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="designation" id="inputSuccess" class="form-control"
                                placeholder="Write your designation">
                        </div>
                    </div>


                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Employee ID<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="office_id" id="inputSuccess" class="form-control" value="NAZ-">
                        </div>
                    </div>


                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Section</label>
                        <div class="col-xs-8">
                            <input type="text" name="section" id="inputSuccess" class="form-control"
                                placeholder="Write your section name">
                        </div>
                    </div>


                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Department<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="department" id="inputSuccess" class="form-control"
                                placeholder="Write your department name">
                        </div>
                    </div>


                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Date of Join<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="date" name="doj" id="inputSuccess" class="form-control">
                        </div>
                    </div>


                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Mobile No.<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="mobile" id="inputSuccess" class="form-control"
                                placeholder="Contact no. as per your CV">
                        </div>
                    </div>


                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Proposed Email ID</label>
                        <div class="col-xs-8">
                            <input type="email" name="pro_id" id="inputError" class="form-control"
                                placeholder="Write your desired email address" value="@nz-bd.com">
                            <span class="help-block">Please write with valid email format, Example:
                                name@nz-bd.com</span>
                        </div>
                    </div>


                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Proposed Email Group</label>
                        <div class="col-xs-8">
                            <select class="form-control" name="mail_group">
                                <option value="all_emp" selected>Default [all_emp@nz-bd.com]</option>
                                <option value="merchandisers">Merchandising</option>
                                <option value="knitter">Knitting</option>
                                <option value="dyeing">Dyeing</option>
                                <option value="all_store">Store</option>
                                <option value="internal.audit">Internal Audit</option>
                                <option value="systems">ICT</option>
                                <option value="nazdeptheads">NAZ Dept. Head</option>
                                <option value="Accounts">Accounts</option>
                                <option value="all_cad">CAD</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Referrence<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="referred_by" id="inputSuccess" class="form-control">
                        </div>
                    </div>

                    <div class="bg-light text-right">
                        <button type="submit" class="btn btn-success">Apply</button>

                    </div>
            </div>




            @endsection
