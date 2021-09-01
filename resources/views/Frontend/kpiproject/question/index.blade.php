@extends('layouts.frontend')

@section('main')


<h2>Select question set:</h2>

<form action="{{route('admin.question.search')}}" method="get">
    @csrf
<div class="mb-3">
    <label for="set" class="form-label">সেট</label>
<select class="form-control" name="set-query">
    <option>ক</option>
    <option>খ</option>
    <option>গ</option>
    <option>ঘ</option>
    <option>ঙ</option>
</select>
</div>

<button type="submit" class="btn btn-info">Submit</button>

</form>

@endsection
