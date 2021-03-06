@extends('layouts.frontend')
@section('main')

<section class="contact-section pt-130">
    <div class="container-fluid">


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



<table class="table table-bordered table-hover text-wrap " style="font-size: .8rem;" >
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
            <th scope="col" style="text-align:center">Supplier</th>
            <th scope="col" style="text-align:center">Dop</th>
            <th scope="col" style="text-align:center">Sent on</th>
            {{-- <th scope="col" style="text-align:center">Used</th> --}}
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
            <th scope="row" style="text-align:center">{{$key+1}}</th>
            <td>{{$item->Iname}}</td>
            <td style="text-align:center">{{$item->Brand}}</td>
            <td style="text-align:center">{{$item->Model}}</td>
            <td>{{$item->Serial}}</td>
            <td>{{$item->User}}</td>
            <td>{{$item->Section}}</td>
            <td style="text-align:center">{{$item->Warranty}}</td>
            <td style="text-align:center">{{$item->Supplier}}</td>
            <td style="text-align:center">{{$item->Purdate}}</td>
            <td style="text-align:center">{{$item->Outdate}}</td>
            {{-- <td style="text-align:center">{{$item->Purdate->diffInDays->$item->Outdate}}</td> --}}
                {{-- <td>
                    <?php
                            $fdate = $item->Purdate;
                            $tdate = $item->Outdate;
                            $date1 = new DateTime($fdate);
                            $date2 = new DateTime($tdate);
                                    $interval = $date2->diff($date1);
                                    $days = $interval->format('%a');
                            echo $days.' ' .'days';

                        ?>
                </td> --}}

            <td style="text-align:center">{{$item->Gpno}}</td>
            <td style="text-align:center">{{$item->Sentfor}}</td>
            <td style="text-align:center">{{$item->To}}</td>
            <td style="text-align:center">{{$item->Grn}}</td>
            <td> {{$item->Problems}}</td>
            <td>{{$item->Notes}}</td>

            @php
            if ( $item->Status == 'Pending'):
            $color = '#FF4500';
            elseif ( $item->Status == 'Solved'):
            $color = 'green';
            elseif ( $item->Status == 'Returned'):
            $color = '#737CA1';
            elseif ( $item->Status == 'Replaced'):
            $color = 'bisque';
            else:
            $color = 'gray';
            endif;
            @endphp

            <td style="background-color: {{$color}}; color: #3F000F; text-weight:  ; text-align:center">{{ $item->Status }}</td>

            {{-- <td>{{$item->Status}}</td> --}}
            {{--<td>{{$item->created_at}}</td>--}}
            {{-- <td>{{$item->created_at->format('Y-m-d')}}</td> --}}
        </tr>

        @endforeach

    </tbody>
</table>
{{$items->links('pagination::bootstrap-4')}}

</div>
</section>
@endsection
