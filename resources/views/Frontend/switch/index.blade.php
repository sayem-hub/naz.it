@extends('layouts.frontend')

@section('main')

<section class="contact-section pt-130">
    <div class="container">



<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-12">

        <h4 class="text-center mt-3">Network Switch List</h4>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <p>0 = Manageable,</p>
        <p>1 = Non-Manageable</p>
        </div>

        <div class="form-group">
        <a href="{{ route('switch.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Switch</a>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('create.switch.pdf') }}" class="btn btn-warning btn-sm" >PDF report</a>
            <a href="{{ route('create.switch.summary') }}" class="btn btn-info btn-sm" >Summary</a>
        </div>


<table class="table table-bordered table-hover" style="font-size: .8rem">
    <thead class="thead-dark">
      <tr>
       <th scope="col" class="text-center">SL</th>
        <th scope="col" class="text-center">Brand</th>
        <th scope="col" class="text-center">Model</th>
        <th scope="col" class="text-center">Port</th>
        <th scope="col" class="text-center">Location</th>
        <th scope="col" class="text-center">Type</th>
        <th scope="col" class="text-center">Status</th>
        <th scope="col" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($switches as $key=>$switch)

      <tr>
        <th scope="row" class="text-center">{{$key+1}}</th>
        <td class="text-center">{{$switch->brand}}</td>
        <td class="text-center">{{$switch->model}}</td>
        <td class="text-center">{{$switch->port_no}}</td>
        <td class="text-center">{{$switch->location}}</td>
        <td class="text-center">{{$switch->type}}</td>
        <td class="text-center">{{$switch->status}}</td>
        <td class="text-center">
          <a class="" href="{{route('switch.edit',$switch->id)}}"><i class="fa fa-edit fa-lg"></i></a>

        </td>
      </tr>

      @endforeach

    </tbody>
  </table>
    </div>
</div>
  {{ $switches->links('pagination::bootstrap-4')}}

    </div>
</section>

@endsection




