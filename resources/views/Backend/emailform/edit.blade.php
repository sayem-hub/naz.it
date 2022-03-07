@extends('layouts.frontend')
@section('main')

<section class="contact-section pt-130">

    <div class="container">


        <div class="row">
                <h4 class="text-center">Email ID Opening Form</h4>


                <div class="col-md-3"></div>

                    <div class="col-md-6 ">
                        <a class="btn btn-primary" href="{{route('view.email.request', $eRequest->id)}}">View</a>

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

                <form class="form-horizontal" action="{{ route('edit.email.request', $eRequest->id) }}" method="post">
                    @csrf

                    <h6 class="text-center py-2">Edit Email ID Request </h6>
                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Full Name<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="full_name" id="inputSuccess" class="form-control"
                                value="{{$eRequest->full_name}}">
                        </div>
                    </div>


                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Nick Name</label>
                        <div class="col-xs-8">
                            <input type="text" name="nick_name" id="inputSuccess" class="form-control"
                                   value="{{$eRequest->nick_name}}">
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Designation<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="designation" id="inputSuccess" class="form-control"
                                   value="{{$eRequest->designation}}">
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Employee ID<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="office_id" id="inputSuccess" class="form-control" value="{{$eRequest->office_id}}">
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Section</label>
                        <div class="col-xs-8">
                            <input type="text" name="section" id="inputSuccess" class="form-control"
                                   value="{{$eRequest->section}}">
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Department<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="department" id="inputSuccess" class="form-control"
                                   value="{{$eRequest->department}}">
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Date of Join<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="date" name="doj" id="inputSuccess" class="form-control" value="{{$eRequest->doj}}">
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Mobile No.<span
                                style="color: red">*</span></label>
                        <div class="col-xs-8">
                            <input type="text" name="mobile" id="inputSuccess" class="form-control"
                                   value="{{$eRequest->mobile}}">
                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Proposed Email ID</label>
                        <div class="col-xs-8">
                            <input type="email" name="pro_id" id="inputError" class="form-control"
                                   value="{{$eRequest->pro_id}}">

                        </div>
                    </div>

                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Proposed Email Group</label>
                        <div class="col-xs-8">
                            <select class="form-control" name="mail_group">
                                <option value="{{$eRequest->mail_group}}" selected>{{$eRequest->mail_group}}</option>
                                <option value="all_emp">Default [all_emp@nz-bd.com]</option>
                                <option value="merchandisers">Merchandising</option>
                                <option value="pd">PD</option>
                                <option value="maintenance">Maintenance</option>
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
                            <input type="text" name="referred_by" id="inputSuccess" class="form-control" value="{{$eRequest->referred_by}}">
                        </div>
                    </div>


                    <div class="form-group has-success has-feedback">
                        <label class="col-xs-4 control-label" for="inputSuccess">Status</label>
                        <div class="col-xs-8">
                            <select class="form-control" name="status">
                                <option value="{{$eRequest->status}}" selected>{{$eRequest->status}}</option>
                                <option value="Approved">Approved</option>
                                <option value="Decline">Decline</option>
                            </select>
                        </div>
                    </div>


                    <div class="bg-light py-2">
                        <button type="submit" class="btn btn-success">Update</button>

                    </div>

            </form>

            </div>
        </div>

        </div>

        </div>
    </div>
</section>
@endsection
