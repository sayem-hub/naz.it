@extends('layouts.frontend')
@section('main')
    <section class="contact-section pt-130">


    <div class="container-fluid">

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4">

                <div class="card bg-info mb-2">
                    <div class="card-body">

                        <h4 class="card-title text-center">User information</h4>
                        <p class="text-center text-danger">Please fill up all the required fields.</p>


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



                        <form class="form" action="{{ route('create.pre.req') }}" method="post">
                            @csrf

                                <div class="form-group mb-2">
                                    <label class="col-xs-4 control-label" for="inputSuccess">Employee ID<span
                                            style="color: red">*</span></label>
                                    <div class="col-xs-8">
                                        <input type="text" name="emp_id" id="inputSuccess" class="form-control" value="NAZ-" required>
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <label class="col-xs-4 control-label" for="inputSuccess">Employee Name<span
                                            style="color: red">*</span></label>
                                    <div class="col-xs-8">
                                        <input type="text" name="employee_name" id="inputSuccess" class="form-control"
                                               placeholder="Write your full official name" required>
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <label class="col-xs-4 control-label" for="inputSuccess">Designation<span
                                            style="color: red">*</span></label>
                                    <div class="col-xs-8">
                                        <input type="text" name="designation" id="inputSuccess" class="form-control"
                                               placeholder="Write your designation" required>
                                    </div>
                                </div>



                                <div class="form-group mb-2">
                                    <label class="col-xs-4 control-label" for="inputSuccess">Section<span style="color: red">*</span></label>
                                    <div class="col-xs-8">
                                        <input type="text" name="section" id="inputSuccess" class="form-control"
                                               placeholder="Write your section name" required>
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <label class="col-xs-4 control-label" for="inputSuccess">Department<span
                                            style="color: red">*</span></label>
                                    <div class="col-xs-8">
                                        <input type="text" name="department" id="inputSuccess" class="form-control"
                                               placeholder="Write your department name" required>
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <label class="col-xs-4 control-label" for="inputSuccess">Mobile No.<span
                                            style="color: red">*</span></label>
                                    <div class="col-xs-8">
                                        <input type="text" name="mobile" id="inputSuccess" class="form-control"
                                               placeholder="Contact no. " required>
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <label class="col-xs-4 control-label" for="inputSuccess">Reference (Optional)</label>
                                    <div class="col-xs-8">
                                        <input type="text" name="reference" id="inputSuccess" class="form-control">
                                    </div>
                                </div>


                    </div>
                        </div>
                </div>





                                {{--                    Pre Requisition Section Start Here--}}



                                <div class="col-md-1"></div>
                                <div class="col-md-4">
                                    <div class="card bg-primary bg-gradient mb-2">
                                        <div class="card-body">

                                        <h4 class="card-title text-center">Item information</h4>
                                            <p class="text-center text-danger">Please fill up all the required fields.</p>

                                        <div class="form-group mb-2">
                                            <label class="col-xs-4 control-label" for="inputSuccess">Item Name<span
                                                    style="color: red">*</span></label>
                                            <div class="col-xs-8">
                                                <input type="text" name="item_des" id="inputSuccess" class="form-control" placeholder="Write item name here" required>
                                            </div>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label class="col-xs-4 control-label" for="inputSuccess">Size (Optional)</label>
                                            <div class="col-xs-8">
                                                <input type="text" name="size" id="inputSuccess" class="form-control"placeholder="Input product size">
                                            </div>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label class="col-xs-4 control-label" for="inputSuccess">Unit<span
                                                    style="color: red">*</span></label>
                                            <div class="col-xs-8">
                                                <input type="text" name="unit" id="inputSuccess" class="form-control"
                                                       placeholder="Input measurement unit like Pcs, Pair, Set etc." required>
                                            </div>
                                        </div>



                                        <div class="form-group mb-2">
                                            <label class="col-xs-4 control-label" for="inputSuccess">Quantity<span
                                                    style="color: red">*</span></label>
                                            <div class="col-xs-8">
                                                <input type="number" name="qty" id="inputSuccess" class="form-control"
                                                       placeholder="Input your required quantity." required>
                                            </div>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label class="col-xs-4 control-label" for="inputSuccess">Purpose<span
                                                    style="color: red">*</span></label>
                                            <div class="col-xs-8">
                                                <input type="text" name="purpose" id="inputSuccess" class="form-control"
                                                       placeholder="Why you are looking for this item?" required>
                                            </div>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label class="col-xs-4 control-label" for="inputSuccess">Remarks (Optional)</label>
                                            <div class="col-xs-8">
                                                <input type="text" name="remarks" id="inputSuccess" class="form-control">
                                            </div>
                                        </div>

{{--                                        <input type="hidden" name="total" value="">--}}


                                        {{--                    Pre Requisition Section End Here--}}

                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="submit" class="btn btn-warning m-3">Submit</button>
                                            </div>
                                            </form>
                                    </div>
                                </div>
                            </div>

        </div>
                    </div>

    </section>
@endsection
