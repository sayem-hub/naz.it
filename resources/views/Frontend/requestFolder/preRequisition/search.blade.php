@extends('layouts.frontend')
@section('main')

    <section class="contact-section pt-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <h4 class="text-center mt-3">Search results by "{{$search_text}}"</h4>

                    <table class="table table-bordered table-hover" style="font-size: .8rem">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Item</th>
                            <th scope="col">Request No</th>
                            <th scope="col">Emp ID</th>
                            <th scope="col">Emp Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Section</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($all_equipment as $key=>$equipment)

                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$equipment->item_des}}</td>
                                <td>{{$equipment->manual_num}}</td>
                                <td>{{$equipment->emp_id}}</td>
                                <td>{{$equipment->employee_name}}</td>
                                <td>{{$equipment->designation}}</td>
                                <td>{{$equipment->section}}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{route('equipment.form.preview', $equipment->id)}}">View/Print</a>

                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
    </section>
@endsection
