@extends('layouts.backend')

@section('main')

<h3 class="text-center mt-3">Outgoing Item List</h3>
<a href="{{route('admin.outgoing.create')}}" class="btn btn-success">Add New Item</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Item Name</th>
        {{--<th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">Serial No.</th>--}}
        <th scope="col">User</th>
        <th scope="col">Section</th>
        <th scope="col">Warranty</th>
        <th scope="col">Supplier</th>
        <th scope="col">Purchase Date</th>
        <th scope="col">Outgoing Date</th>
        {{--<th scope="col">GP No.</th>--}}
        <th scope="col">Sent For</th>
        <th scope="col">Status</th>
        {{--<th scope="col">Created_at</th>--}}
        <th scope="col">Updated_at</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
      
    @foreach($outitems as $key=>$outitem)
          
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$outitem->Iname}}</td>
        {{--<td>{{$outitem->Brand}}</td>
        <td>{{$outitem->Model}}</td>
        <td>{{$outitem->Serial}}</td>--}}
        <td>{{$outitem->User}}</td>
        <td>{{$outitem->Section}}</td>
        <td>{{$outitem->Warranty}}</td>
        <td>{{$outitem->Supplier}}</td>
        <td>{{$outitem->Purdate}}</td>
        <td>{{$outitem->Outdate}}</td>
        {{--<td>{{$outitem->Gpno}}</td>--}}
        <td>{{$outitem->Sentfor}}</td>
        <td>{{$outitem->Status}}</td>
        {{--<td>{{$outitem->created_at}}</td>--}}
        <td>{{$outitem->updated_at}}</td>
        
        <td>
          <a class="btn btn-primary" href="{{route('admin.outgoing.edit',$outitem->id)}}">Edit</a>
          <a class="btn btn-warning" href="{{route('admin.outgoing.delete',$outitem->id)}}">Delete</a>
        </td>
      </tr>

      @endforeach

    </tbody>
  </table>
  {{$outitems->links('pagination::bootstrap-4')}}

@endsection