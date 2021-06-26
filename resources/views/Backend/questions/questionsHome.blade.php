@extends('layouts.backend')

@section('main')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-7">

        <h3 class="text-center mt-3">ডাটা এন্ট্রি অপারেটর পদের প্রশ্নপত্র</h3>

        <h5>সেট নির্বাচন করুন</h5>
        <button class="btn-primary m-2 p-2"><a class="text-white" href="{{route('admin.questions.ka')}}"> “ক”-সেট</a></button>
       <button class="btn-primary m-2 p-2"><a class="text-white" href="{{route('admin.questions.kha')}}">“খ”-সেট</a></button>
       <button class="btn-primary m-2 p-2"><a class="text-white" href="{{route('admin.questions.ga')}}">“গ”-সেট</a></button>

    </div>

</div>


@endsection