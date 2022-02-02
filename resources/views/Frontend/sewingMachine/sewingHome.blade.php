@extends('layouts.frontend')

@section('main')
    <section id="service" class="service-section pt-130 ">

        <div class="container">
            <div class="row">

                <div style="margin-top: 30px">
                    @if(session()->has('message'))
                        <div class="alert alert-warning mt-3">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                </div>

                                Sewing Home Page




            </div>
        </div>

</section>

@endsection

