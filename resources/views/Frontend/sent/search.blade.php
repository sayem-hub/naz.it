@extends('layouts.frontend')
@section('main')

<h3 class="text-center mt-3">Search Results</h3>
<a href="{{route('sent.items.create')}}" class="btn btn-success">Add New Item</a>
<table class="table table-bordered table-hover" style="font-size: 11px">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Item Name</th>
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Serial No.</th>
            <th scope="col">User</th>
            <th scope="col">Section</th>
            <th scope="col">Warranty</th>
            <th scope="col">Supplier</th>
            <th scope="col">Pur. Date</th>
            <th scope="col">Out Date</th>
            <th scope="col">GP No</th>
            <th scope="col">Sent For</th>
            <th scope="col">Problem</th>
            <th scope="col">Notes</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>

            @foreach($sentitems as $key=>$item)

            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$item->Iname}}</td>
                <td>{{$item->Brand}}</td>
                <td>{{$item->Model}}</td>
                <td>{{$item->Serial}}</td>
                <td>{{$item->User}}</td>
                <td>{{$item->Section}}</td>
                <td>{{$item->Warranty}}</td>
                <td>{{$item->Supplier}}</td>
                <td>{{$item->Purdate}}</td>
                <td>{{$item->Outdate}}</td>
                <td>{{$item->Gpno}}</td>
                <td>{{$item->Sentfor}}</td>
                <td>{{$item->Problems}}</td>
                <td>{{$item->Notes}}</td>

                @php
                if ( $item->Status == 'Pending'):
                $color = 'red';
                elseif ( $item->Status == 'Solved'):
                $color = 'green';
                elseif ( $item->Status == 'Returned'):
                $color = 'yellow';
                elseif ( $item->Status == 'Replaced'):
                $color = 'brown';
                else:
                $color = 'gray';
                endif;
                @endphp

                <td style="background-color: {{$color}}">{{ $item->Status }}</td>

                {{-- <td>{{$item->Status}}</td> --}}
                {{--<td>{{$item->created_at}}</td>--}}
                {{-- <td>{{$item->created_at->format('Y-m-d')}}</td> --}}

            </tr>

            @endforeach

        </tbody>
        </table>
        </div>
        </div>
        {{-- {{$computers->links('pagination::bootstrap-4')}} --}}

        @endsection
