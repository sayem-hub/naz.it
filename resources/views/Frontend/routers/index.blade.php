@extends('layouts.frontend')

@section('main')



<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-13">

        <h3 class="text-center mt-3">Router List</h3>

        <div class="form-group">
            <a href="{{ route('router.create') }}" class="btn btn-success">Add New Router</a>
            <a href="{{route('create.router.pdf')}}" class="btn btn-warning btn-sm">PDF Report</a>
        </div>


<table class="table table-bordered table-hover" style="font-size: 14px">
    <thead class="thead-dark">
      <tr>
       <th scope="col">#</th>
        <th scope="col">Router ID</th>
        <th scope="col">Name</th>
        <th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">WiFi name</th>
        <th scope="col">Password</th>
        <th scope="col">IP Address</th>
        <th scope="col">Location</th>
        <th scope="col">Status</th>
        <th scope="col">Notes</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($routers as $key=>$route)

      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$route->router_id}}</td>
        <td>{{$route->name}}</td>
        <td>{{$route->brand}}</td>
        <td>{{$route->model}}</td>
        <td>{{$route->ssid}}</td>
        <td>{{$route->password}}</td>
        <td>{{$route->ip_address}}</td>
        <td>{{$route->location}}</td>
        <td>{{$route->status}}</td>
        <td>{{$route->notes}}</td>
        <td>
          <a class="btn btn-secondary" href="{{route('router.edit',$route->id)}}">Edit</a>

        </td>
      </tr>

      @endforeach

    </tbody>
  </table>
    </div>
</div>
  {{ $routers->links('pagination::bootstrap-4')}}

@endsection




