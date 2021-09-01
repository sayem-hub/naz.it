@extends('layouts.frontend')

@section('main')

<div class="row">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


<h3 class="text-center mt-3">Create Question</h3>
        <form action="#" method="post">
            @csrf

            <div class="col-md-2"></div>

        <div class="col-md-4">
            <label for="question" class="form-label">Question</label>
            <input type="text" class="form-control" name="question" id="question">
        </div>



            <div class="col-md-1">
                <label for="value" class="form-label">Value</label>
                <input type="text" class="form-control" name="value" id="value" >
            </div>

                    <div class="col-md-1">
                        <label for="set" class="form-label">Set</label>
                        <input type="text" class="form-control" name="set" id="set">
                    </div>


            <button type="submit" class="btn btn-primary">Create</button>

        </form>
    </div>


@endsection
