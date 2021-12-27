@extends('layouts.frontend')
@section('main')

<section class="contact-section pt-130">
    <div class="container-fluid">
       <div class="row">

        <div class="col-md-12">

<h4 class="text-center mt-3">Search results by "{{$search_text}}"</h4>
<a href="{{route('sent.items.create')}}" class="btn btn-success"><i class="fa fa-plus"></i>Add New</a>
<table class="table table-bordered table-hover" style="font-size: .8rem">
    <thead class="thead-dark">
        <tr>
            <th scope="col" class="text-center">SL</th>
            <th scope="col" class="text-center">Item</th>
            <th scope="col" class="text-center">Brand</th>
            <th scope="col" class="text-center">Model</th>
            <th scope="col" class="text-center">Serial no.</th>
            <th scope="col" class="text-center">User</th>
            <th scope="col" class="text-center">Section</th>
            <th scope="col" class="text-center">Warranty</th>
            <th scope="col" class="text-center">Supplier</th>
            <th scope="col" class="text-center">Pur date</th>
            <th scope="col" class="text-center">Sent on</th>
            <th scope="col" class="text-center">GP no</th>
            <th scope="col" class="text-center">Sent for</th>
            <th scope="col" class="text-center">Problem</th>
            <th scope="col" class="text-center">Notes</th>
            <th scope="col" class="text-center">Status</th>
        </tr>
        </thead>
        <tbody>

            @foreach($sentitems as $key=>$item)

            <tr>
                <th scope="row" class="text-center">{{$key+1}}</th>
                <td class="text-center">{{$item->Iname}}</td>
                <td class="text-center">{{$item->Brand}}</td>
                <td class="text-center">{{$item->Model}}</td>
                <td class="text-center">{{$item->Serial}}</td>
                <td class="text-center">{{$item->User}}</td>
                <td class="text-center">{{$item->Section}}</td>
                <td class="text-center">{{$item->Warranty}}</td>
                <td class="text-center">{{$item->Supplier}}</td>
                <td class="text-center">{{$item->Purdate}}</td>
                <td class="text-center">{{$item->Outdate}}</td>
                <td class="text-center">{{$item->Gpno}}</td>
                <td class="text-center">{{$item->Sentfor}}</td>
                <td class="text-center">{{$item->Problems}}</td>
                <td class="text-center">{{$item->Notes}}</td>

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

                <td class="text-center" style="background-color: {{$color}}">{{ $item->Status }}</td>

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

    </div>

</section>

        @endsection
