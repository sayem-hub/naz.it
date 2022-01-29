@extends('layouts.frontend')
@section('main')

<section class="contact-section pt-130">
    <div class="container-fluid">
     <div class="row">

        <div class="col-md-12">


<h4 class="text-center">Sent Item List</h4>

<form action="{{ route('sentitem.search') }}" method="GET">

        <a href="{{ route('sent.items.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add New </a>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('sentitem.pending') }}" class="btn btn-danger btn-sm pull-right">Pending report</a>
                    <a href="{{ route('sentitem.wty.pending') }}" class="btn btn-warning btn-sm pull-right">Pending warranty</a>
        </div>

            <div class="col-xs-6 col-md-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for User, item, serial no." name="query" id="txtSearch"
                        value="{{ request()->input('query') }}">

                    <div class="input-group-btn">
                        <button class="btn btn-primary" type="submit">
                            <span class="search"><i class="fa fa-search fa-fw"></i>Search</span>
                        </button>

                    </div>
                    <div class="text-danger">@error('query'){{ $message }}@enderror</div>
                </div>
            </div>
</form>



<table class="table table-bordered text-nowrap table-hover" style="font-size: .69rem;" >
    <thead>
        <tr>
            <th scope="col" style="text-align:center">SL</th>
            <th scope="col" style="text-align:center">Item</th>
            <th scope="col" style="text-align:center">Brand</th>
            <th scope="col" style="text-align:center">Model</th>
            <th scope="col" style="text-align:center">Serial no.</th>
            <th scope="col" style="text-align:center">User</th>
            <th scope="col" style="text-align:center">Section</th>
            <th scope="col" style="text-align:center">Wty</th>
            <th scope="col" style="text-align:center">Pur date</th>
            <th scope="col" style="text-align:center">Wty rem</th>
            <th scope="col" style="text-align:center">Supplier</th>
            <th scope="col" style="text-align:center">Sent on</th>
            <th scope="col" style="text-align:center">GP</th>
            <th scope="col" style="text-align:center">Sent for</th>
            <th scope="col" style="text-align:center">To</th>
            <th scope="col" style="text-align:center">GRN</th>
            <th scope="col" style="text-align:center">Problem</th>
            <th scope="col" style="text-align:center">Notes</th>
            <th scope="col" style="text-align:center">Status</th>
            {{--<th scope="col">Created_at</th>--}}
            {{-- <th scope="col">Entry Date</th> --}}
            {{-- <th scope="col">Action</th> --}}

        </tr>
    </thead>
    <tbody>

        @foreach($items as $key=>$item)



        <tr >
            <th scope="row" class="text-center ">{{$key+1}}</th>
            <td class="text-wrap">{{$item->Iname}}</td>
            <td class="text-center ">{{$item->Brand}}</td>
            <td class="text-center text-wrap">{{$item->Model}}</td>
            <td>{{$item->Serial}}</td>
            <td class="text-wrap">{{$item->User}}</td>
            <td class="text-wrap">{{$item->Section}}</td>
            <td class="text-wrap">{{$item->Warranty}}</td>
            <td class="text-center">{{$item->Purdate}}</td>


            @php
                $purdate = strtotime($item->Purdate);

                $warranty = ($item->Warranty);
                $difference =time()- $purdate;
                $differenceInDays = round(($warranty)-($difference/86400));
            @endphp

            @if($item->Purdate==!'Null')
                <td class="" style="text-align:center">{{'-'}} </td>
                @elseif($differenceInDays<=0)
                <td class="text-danger" style="text-align:center">{{'Expired'}} </td>

            @else
            <td class="" style="text-align:center">{{$differenceInDays}} days</td>
            @endif


            <td class="text-wrap" style="text-align:center">{{$item->Supplier}}</td>
            <td style="text-align:center">{{$item->Outdate}}</td>
            <td class="text-wrap" style="text-align:center">{{$item->Gpno}}</td>
            <td class="text-wrap" style="text-align:center">{{$item->Sentfor}}</td>
            <td style="text-align:center">{{$item->To}}</td>
            <td style="text-align:center">{{$item->Grn}}</td>
            <td class="text-wrap"> {{$item->Problems}}</td>
            <td class="text-wrap">{{$item->Notes}}</td>

            @php
            if ( $item->Status == 'Pending'):
            $color = '#FF4500';
            elseif ( $item->Status == 'Solved'):
            $color = 'green';
            elseif ( $item->Status == 'Returned'):
            $color = '#737CA1';
            elseif ( $item->Status == 'Replaced'):
            $color = 'bisque';
            elseif ( $item->Status == 'Returnable'):
            $color = '#6bab90';
            else:
            $color = 'gray';
            endif;
            @endphp

            <td style="background-color: {{$color}}; color: #3F000F; text-align:center; min-width: 100px; font-size: .7rem;" class="btn btn-sm">{{ $item->Status }}</td>

            {{-- <td>{{$item->Status}}</td> --}}
            {{--<td>{{$item->created_at}}</td>--}}
            {{-- <td>{{$item->created_at->format('Y-m-d')}}</td> --}}
        </tr>

        @endforeach

    </tbody>
</table>
{{$items->links('pagination::bootstrap-4')}}

        </div>
     </div>

</div>
</section>
@endsection
