@extends('layouts.frontend')
@section('main')

    <section class="contact-section pt-130">

        <div class="container">

            <div class="row">


                <div class="col-md-3"></div>
                <div class="col-md-6 ">

                    <div class="card">
                        <div class="card-header">
                        <h4 class="text-center">Email ID Opening Request</h4></div>


                        <div class="card-body">

                            <p style="color: black">Dear Sir, <br> Please open a mail account as per below info. <br><br></p>

                            <table class="table table-bordered table-sm">
                                <tr><td>{{'  '.'Employee ID'}} </td> <td>{{$all_request->office_id}}</td></tr>
                                <tr><td>Employee Name</td> <td>{{$all_request->full_name}}</td></tr>
                                <tr><td>Nick Name</td> <td>{{$all_request->nick_name}}</td></tr>
                                <tr><td>Designation</td> <td>{{$all_request->designation}}</td></tr>
                                <tr><td>Section</td> <td>{{$all_request->section}}</td></tr>
                                <tr><td>Department</td> <td>{{$all_request->department}}</td></tr>
                                <tr><td>Joining Date</td> <td>{{$all_request->doj}}</td></tr>
                                <tr><td>Mobile</td> <td>{{$all_request->mobile}}</td></tr>
                                <tr><td class="fw-bold">Proposed ID</td> <td class="fw-bold">{{$all_request->pro_id}}</td></tr>
                                <tr><td class="fw-bold">Proposed Group</td> <td class="fw-bold">{{$all_request->mail_group}}</td></tr>
                                <tr><td>Common Group</td> <td>all_emp@nz-bd.com</td></tr>
                            </table>

                            <p style="color: black"><br> Thanks & Regards, <br>Abu Sayem-IT</p>


                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
