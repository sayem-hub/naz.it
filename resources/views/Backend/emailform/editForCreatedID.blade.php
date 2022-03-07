@extends('layouts.frontend')
@section('main')

<section class="contact-section pt-130">

    <div class="container">


        <div class="row">
                <h4 class="text-center">Email ID Opening Form</h4>


                <div class="col-md-3"></div>

                    <div class="col-md-6 ">
                        <a class="btn btn-primary" href="{{route('editForEntry.email.request', $createdIds->id)}}">View</a>

                        <div class="py-2">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        </div>

                        <div style="margin-top: 30px">
                            @if(session()->has('message'))
                                <div class="alert alert-success mt-3">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                        </div>

                        <div class="card">



            <div class="card-body">

                <form class="form-horizontal" action="{{ route('editForEntry.email.request', $createdIds->id) }}" method="post">
                    @csrf

                    <h6 class="text-center py-2">Enter Created Email Address</h6>
                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Full Name<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="full_name" id="inputSuccess" class="form-control" value="{{$createdIds->full_name}}"
                                readonly>
                        </div>
                    </div>


                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Nick Name</label>
                        <div class="col-xs-8">
                            <input type="text" name="nick_name" id="inputSuccess" class="form-control"
                                   value="{{$createdIds->nick_name}}" readonly>
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Designation<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="designation" id="inputSuccess" class="form-control"
                                   value="{{$createdIds->designation}}" readonly>
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Employee ID<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="office_id" id="inputSuccess" class="form-control" value="{{$createdIds->office_id}}" readonly>
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Section</label>
                        <div class="col-xs-8">
                            <input type="text" name="section" id="inputSuccess" class="form-control"
                                   value="{{$createdIds->section}}" readonly>
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Department<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="department" id="inputSuccess" class="form-control"
                                   value="{{$createdIds->department}}" readonly>
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Date of Join<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="date" name="doj" id="inputSuccess" class="form-control" value="{{$createdIds->doj}}" readonly>
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Mobile No.<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="mobile" id="inputSuccess" class="form-control"
                                   value="{{$createdIds->mobile}}" readonly>
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Proposed Email ID</label>
                        <div class="col-xs-8">
                            <input type="email" name="pro_id" id="inputError" class="form-control"
                                   value="{{$createdIds->pro_id}}" readonly>

                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Proposed Email Group</label>
                        <div class="col-xs-8" >
                            <select class="form-control" name="mail_group" readonly>
                                <option value="{{$createdIds->mail_group}}" selected>{{$createdIds->mail_group}}</option>
                                <option value="all_emp">Default [all_emp@nz-bd.com]</option>
                                <option value="merchandisers">Merchandising</option>
                                <option value="pd">PD</option>
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
                        <label class="col-xs-4 control-label" for="inputSuccess">Referrence</label>
                        <div class="col-xs-8">
                            <input type="text" name="referred_by" id="inputSuccess" class="form-control" value="{{$createdIds->referred_by}}">
                        </div>
                    </div>


                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Status</label>
                        <div class="col-xs-8">
                            <select class="form-control" name="status" readonly>
                                <option value="{{$createdIds->status}}" selected>{{$createdIds->status}}</option>
                                <option value="Approved">Approved</option>
                                <option value="Decline">Decline</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Created Email ID<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="created_address" id="inputSuccess" class="form-control" value="{{$createdIds->created_address}}">
                        </div>
                    </div>


                    <div class="bg-light py-2">
                        <button type="submit" class="btn btn-success">Update & Send Mail</button>

                    </div>

            </form>

            </div>
        </div>

        </div>

        </div>
    </div>
</section>
@endsection
