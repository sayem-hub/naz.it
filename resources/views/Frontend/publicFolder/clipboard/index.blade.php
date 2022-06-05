@extends('layouts.frontend')

@section('main')

<section class="contact-section pt-130">
    <div class="container">

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">

        <h4 class="text-center m-3">Clipboard List</h4>

        <form action="" method="post">
            @csrf

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Input your Link</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="long_url">
                </div>

                <button class="btn btn-primary btn-sm" type="button">Create</button>
                </div>



        </form>



<table class="table table-bordered table-hover" style="font-size: .8rem">
    <thead class="thead-dark">
      <tr>
       <th scope="col" class="text-center">SL</th>
        <th scope="col" class="text-center">Your URL</th>
        <th scope="col" style="text-align:center">Use Code</th>
        <th scope="col" style="text-align:center">Action</th>
      </tr>
    </thead>
    <tbody>

        <td style="text-align:center">
          {{-- <a class="" href="{{route('printer.edit',$print->id)}}"><i class="fa fa-edit fa-lg"></i></a> --}}

        </td style="text-align:center">
      </tr>


    </tbody>
  </table>
    </div>
</div>
  {{-- {{ $printers->links('pagination::bootstrap-4')}} --}}

    </div>
</section>

@endsection




