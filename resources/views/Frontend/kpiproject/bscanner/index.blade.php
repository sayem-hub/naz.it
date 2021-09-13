@extends('layouts.frontend')

@section('main')

<div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-13">

        <h3 class="text-center mt-3">Barcode Scanner List</h3>

        <form action="" method="GET">
            <div class="form-group">
                <a href="" class="btn btn-success">Add New Tab</a>
                <a href="" class="btn btn-warning btn-sm">PDF Report</a>
                <div class="form-group row"><br>
                    <div class="col-xs-3">

                        <input type="text" class="form-control" name="query" placeholder="User name or Tab serial no."
                            value="{{ request()->input('query') }}">
                        <span class="text-danger">@error('query'){{ $message }}@enderror</span>
                    </div>
                    <button type="submit" class="btn btn-info">Search</button>
                </div>

            </div>
        </form>



<table class="table table-bordered table-hover" style="font-size: 12px">
    <thead class="thead-dark">
      <tr>
       <th scope="col">#</th>
        <th scope="col">Scanner ID</th>
        <th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">Serial</th>
        <th scope="col">Type</th>
        <th scope="col">Emp ID</th>
        <th scope="col">User</th>
        <th scope="col">Title</th>
        <th scope="col">Sect.</th>
        <th scope="col">Dept.</th>
        <th scope="col">Line</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>

      @foreach($bscanners as $key=>$bscanner)

      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$bscanner->scanner_id}}</td>
        <td>{{$bscanner->brand}}</td>
        <td>{{$bscanner->model}}</td>
        <td>{{$bscanner->serial}}</td>
        <td>{{$bscanner->type}}</td>
        <td>{{$bscanner->emp_id}}</td>
        <td>{{$bscanner->user}}</td>
        <td>{{$bscanner->designation}}</td>
        <td>{{$bscanner->section}}</td>
        <td>{{$bscanner->department}}</td>
        <td>{{$bscanner->line_no}}</td>
        <td>{{$bscanner->status}}</td>
        {{-- <td>{{$bscanner->notes}}</td> --}}
        <td>
          <a class="btn btn-secondary" href="{{ route('bscanner.edit', $bscanner->id) }}">Edit</a>

        </td>
      </tr>

      @endforeach

    </tbody>
  </table>
    </div>
</div>
  {{-- {{$tablets->links('pagination::bootstrap-4')}} --}}

@endsection




