@extends('layouts.frontend')
@section('main')
    <section class="contact-section pt-130">

        <div class="container">

<form class="" action="{{ route('equipment.search') }}" method="GET">

{{--    <a href="{{route('pdf.generate')}}" class="btn btn-primary btn-sm pull-right"> PDF Report</a>--}}

    <div class="col-xs-6 col-md-4">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Type employee ID" name="query"
                   id="txtSearch" value="{{ request()->input('query') }}">

            <div class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                    <span class="search"><i class="fa fa-search fa-fw"></i>Find</span>
                </button>

            </div>
            <div class="text-danger">@error('query'){{ $message }}@enderror</div>
        </div>
    </div>
</form>

        </div>
    </section>
    @endsection
