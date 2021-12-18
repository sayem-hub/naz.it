@extends('layouts.frontend')

@section('main')

<section class="contact-section pt-130">

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3 class="text-center mt-3">Profile</h3>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('profile') }}" method="post" enctype="multipart/form-data">
                @csrf
<img src="{{asset('/upload/users/'.auth()->user()->photo)}}" class="mt-3" alt="photo" style="height: 200px;">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ auth()->user()->name }}" placeholder="Enter Your Name..." readonly>
                </div>

                <div class="mb-3">
                    <label for="designation" class="form-label">Designation</label>
                    <select name="designation" class="form-control" id="designation">
                        <option value="{{ auth()->user()->name }}" selected>{{ auth()->user()->designation }}</option>
                        <option value="Officer">Officer</option>
                        <option value="Executive">Executive</option>
                        <option value="Sr. Executive">Sr. Executive</option>
                        <option value="Data Entry Operator">Data Entry Operator</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="office-id" class="form-label">Office ID</label>
                    <input type="text" name="office_id" class="form-control" id="office_id" value="{{ auth()->user()->office_id }}" placeholder="Enter Your Office ID No..." readonly>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" name="phone" class="form-control" id="phone" value="{{ auth()->user()->phone }}" placeholder="Enter Your Phone Number..." readonly>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{ auth()->user()->email }}" placeholder="Enter Your Email..." readonly>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" value="{{ auth()->user()->password }}"
                        placeholder="Enter Your Password...">
                </div>

                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="confirm_password"  placeholder="Confirm Your Password...">
                </div>

                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <select name="department" class="form-control" id="department" readonly>
                        <option selected>{{ auth()->user()->department }}</option>

                    </select>
                </div>

                <div class="mb-3">
                    <label for="section" class="form-label">Section</label>
                    <select name="section" class="form-control" id="section" readonly>
                        <option selected>{{ auth()->user()->section }}</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="company" class="form-label">Company</label>
                    <select name="company" class="form-control" id="company">
                        <option selected>{{ auth()->user()->company }}</option>
                        <option value="NAZ Bangladesh Ltd.">NAZ Bangladesh Ltd.</option>
                        <option value="CA Knitwear Ltd.">CA Knitwear Ltd.</option>
                        {{-- <option value="NZ HO">NZ HO</option> --}}
                    </select>
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">Profile Picture</label>
                    <input type="file" name="photo" class="form-control" id="photo" aria-describedby="emailHelp" >

                </div>

                <button type="submit" class="btn btn-primary">Update Profile</button>

            </form>
        </div>
    </div>
</div>
</section>
@endsection
