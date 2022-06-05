@extends('layouts.frontend')
@section('main')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/frontend/js/validate.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>


    <style>
        .error {
            color: red;
            border-color: red;
        }
    </style>


    <section class="contact-section pt-130">


    <div class="container-fluid">

        <span id="message_error"></span>


        <div class="row bg-secondary">

            <div class="col-md-0"></div>
            <div class="col-md-4">


                <div class="card m-2">
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



                        <form class="form" id="validate" action="{{ route('create.pre.req') }}" method="post" enctype="multipart">
                            @csrf

                                <div class="form-group mb-2">
                                    <label class="col-xs-4 control-label" for="inputSuccess">Employee ID<span
                                            style="color: red">*</span></label>
                                    <div class="col-xs-8">
                                        <input type="text" name="emp_id" id="inputSuccess" class="form-control" placeholder="Type your NAZ Id here" required>
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




                    <div class="col-md-8">

                                    <div class="card m-2">

                                        <div class="card-body">
                                            <a href="{{route('pre.req.print')}}"><mark class="text-dark">Click for Print</mark> </a>
                                        <h4 class="card-title text-center">Item information</h4>
                                            <p class="text-center text-danger">Please fill up all the required fields.</p>


                                            <table id="emptbl" class="table table-bordered">
                                                <thead class="table-dark">
                                                <tr>
                                                    <th>Item Name</th>
                                                    <th>Qty</th>
                                                    <th>Size</th>
                                                    <th>Unit</th>
                                                    <th>Purpose</th>
                                                    <th>Remarks</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td id="col0">
                                                    <select class="form-control" name="item_des[]" id="item_des">
                                                        <option selected disabled>Select</option>
                                                        <option value="Printer">Printer</option>
                                                        <option value="Scanner">Scanner</option>
                                                        <option value="Router">Router</option>
                                                        <option value="Network Switch">Network Switch</option>
                                                        <option value="Pendrive">Pendrive</option>
                                                        <option value="Portable HDD">Portable HDD</option>
                                                    </select></td>
                                                    <td id="col1"><input type="tel" class="form-control" name="qty[]" required></td>
                                                    <td id="col2"><input type="tel" class="form-control" name="size[]" required></td>
                                                    <td id="col3">
                                                        <select class="form-control" name="unit[]" id="unit">
                                                                <option selected disabled>Select</option>
                                                                <option value="Pcs">Pcs</option>
                                                                <option value="Set">Set</option>
                                                                <option value="Pair">Pair</option>
                                                                <option value="Meter">Meter</option>
                                                        </select>
                                                    </td>
                                                    <td id="col4"><input type="tel" class="form-control" name="purpose[]" required></td>
                                                    <td id="col5"><input type="tel" class="form-control" name="remarks[]" required></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table>

                                                <tr>
                                                    <td><button type="button" class="btn btn-sm btn-info" onclick="addRows()">Add</button></td>
                                                    <td><button type="button" class="btn btn-sm btn-danger" onclick="deleteRows()">Remove</button></td>
                                                    <td><button type="submit" class="btn btn-sm btn-success">Save</button></td>
                                                </tr>
                                            </table>
                                        </form>



                                            {{--            End new dynamic section--}}



                                        {{--                    Pre Requisition Section End Here--}}

{{--                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">--}}

{{--                                            <button type="submit" class="btn btn-warning mb-2">Submit</button>--}}
                                            </div>
                                    </div>

                        <div class="">
                            <h5 class="text-center m-2">Saved Item List</h5>
                                            <table class="table table-sm table-dark">
                                                <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Department</th>
                                                </tr>
                                                </thead>
                                                <tbody>
{{--                                                @foreach ($data as $key=>$items )--}}
{{--                                                    <tr>--}}
{{--                                                        <th scope="row">{{ ++$key }}</th>--}}
{{--                                                        <td>{{ $items->empname }}</td>--}}
{{--                                                        <td>{{ $items->phone }}</td>--}}
{{--                                                        <td>{{ $items->department }}</td>--}}
{{--                                                    </tr>--}}
{{--                                                @endforeach--}}
                                                </tbody>
                                            </table>
                        </div>

                                        </div>
                                </div>
                            </div>

        </div>
                    </div>


        <script>
        function addRows()
        {
            var table = document.getElementById('emptbl');
            var rowCount = table.rows.length;
            var cellCount = table.rows[0].cells.length;
            var row = table.insertRow(rowCount);
            for(var i =0; i <= cellCount; i++)
            {
                var cell = 'cell'+i;
                cell = row.insertCell(i);
                var copycel = document.getElementById('col'+i).innerHTML;
                cell.innerHTML=copycel;
                if(i == 5)
                {
                    var radioinput = document.getElementById('col2').getElementsByTagName('input');
                    for(var j = 0; j <= radioinput.length; j++)
                    {
                        if(radioinput[j].type == 'radio')
                        {
                            var rownum = rowCount;
                            radioinput[j].name = 'gender['+rownum+']';
                        }
                    }
                }
            }
        }

        function deleteRows()
        {
            var table = document.getElementById('emptbl');
            var rowCount = table.rows.length;
            if(rowCount > '2')
            {
                var row = table.deleteRow(rowCount-1);
                rowCount--;
            }else{
                alert('There should be at least one row');
            }
        }
    </script>
        <!-- alert blink text -->
        <script>
        function blink_text()
        {
            $('#message_error').fadeOut(700);
            $('#message_error').fadeIn(700);
        }
        setInterval(blink_text,1000);
    </script>
        <!-- script validate form -->
        <script>
        $('#validate').validate({
            reles: {
                'item_des[]': {
                    required: true,
                },
                'qty[]': {
                    required:true,
                },

                'unit[]': {
                    required:true,
                },

                'purpose[]': {
                    required:true,
                },
            },
            messages: {
                'item_des[]' : "Please input this field",
                'qty[]' : "Please input this field",
                'unit[]' : "Please input this field",
                'purpose[]' : "Please input this field*",
            },
        });
    </script>


    </section>
@endsection
