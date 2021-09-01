@extends('layouts.frontend')
@section('main')

<h3 class="text-center mt-3">Search Results</h3>
<a href="{{route('admin.question.create')}}" class="btn btn-success">Add New Set</a>
<table class="table table-bordered table-hover" style="font-size: 14px">
    <thead class="thead-dark">
        <tr>

            <th scope="col">#</th>
            <th scope="col">Question</th>
            <th scope="col">Value</th>
            {{-- <th scope="col">Set</th> --}}
            <th scope="col">Last update</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>

        @foreach($questions as $key=>$question)

        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$question->question}}</td>
            <td>{{$question->value}}</td>
            {{-- <td>{{$question->set}}</td> --}}
            <td>{{$question->updated_at}}</td>
            <td>
                <a class="btn btn-secondary" href="{{ route('admin.question.edit', $question->id) }}">Edit</a>

            </td>
        </tr>

        @endforeach

    </tbody>
</table>
</div>
</div>
{{-- {{$computers->links('pagination::bootstrap-4')}} --}}

@endsection
