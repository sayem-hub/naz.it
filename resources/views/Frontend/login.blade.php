@extends('layouts.frontend')

@section('main')

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3 class="text-center mt-3">Login</h3>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif


                <div style="margin-top: 30px">
                    @if(session()->has('message'))
                    <div class="alert alert-success mt-3">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                </div>

            <form action="{{route('login')}}" method="post">
                @csrf


                <div class="mb-3">
                    <label for="office-id" class="form-label">ID No.</label>
                    <input type="text" name="office_id" class="form-control" id="office_id" aria-describedby="emailHelp"
                        placeholder="Enter Your Office ID...">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password"
                        placeholder="Enter Your Password...">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>

                <p class="text-center">Don't have an account? <a href="{{ route('registration') }}">Register</a> </p>
            </form>
        </div>
    </div>
</div>

@endsection
