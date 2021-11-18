@extends('layouts.frontend')
@section('main')


<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

        <h3 class="text-center mt-3">Mail Opening Form</h3>
            <p class="text-center">Please fill up the form amd submit to apply an Email account.<br> (<span style="color: red">*</span>) Marks field are
                        mandatory!</p>

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


        <form action="{{ route('new.mail.form.create') }}" method="post">
            @csrf



            <div class="col-sm-4">
                <label for="full_name" class="form-label">Full Name<span style="color: red">*</span></label>
            </div>

            <div class="col-sm-8">
                <input type="text" class="form-control mail-form" name="full_name" id="full_name" required>
            </div>

           <div class="col-sm-4">
                <label for="nick_name" class="form-label">Nick Name</label>
                </div>

                <div class="col-sm-8">
                <input type="text" class="form-control mail-form" name="nick_name" id="nick_name">
            </div>

            <div class="col-sm-4">
                <label for="designation" class="form-label">Designation<span style="color: red">*</span></label>
                </div>

                <div class="col-sm-8">
                <input type="text" class="form-control mail-form" name="designation" id="designation" required>
            </div>

            <div class="col-sm-4">
                <label for="office_id" class="form-label">Office ID<span style="color: red">*</span></label>
                </div>

                <div class="col-sm-8">
                <input type="text" class="form-control mail-form" name="office_id" id="office_id" required>
            </div>

            <div class="col-sm-4">
                <label for="section" class="form-label">Section</label>
                </div>

                <div class="col-sm-8">
                <input type="text" class="form-control mail-form" name="section" id="section">
            </div>

            <div class="col-sm-4">
                <label for="department" class="form-label">Department<span style="color: red">*</span></label>
                </div>

                <div class="col-sm-8">
                <input type="text" class="form-control mail-form" name="department" id="department" required>
            </div>

            <div class="col-sm-4">
                <label for="doj" class="form-label">Date of Join<span style="color: red">*</span></label>
                </div>

                <div class="col-sm-8">
                <input type="date" class="form-control mail-form" name="doj" id="doj" required>
            </div>

            <div class="col-sm-4">
                <label for="mobile" class="form-label">Mobile No.<span style="color: red">*</span></label>
                </div>

                <div class="col-sm-8">
                <input type="text" class="form-control mail-form" name="mobile" id="mobile" required>
            </div>

            <div class="col-sm-4">
                <label for="pro_id" class="form-label">Proposed Mail ID</label>
                </div>

                <div class="col-sm-8">
                <input type="text" class="form-control mail-form" name="pro_id" id="pro_id" value="@nz-bd.com">
            </div>

            <div class="col-sm-4">
                <label for="mail_group" class="form-label">Proposed Group</label>
                </div>

                <div class="col-sm-8">
                <input type="text" class="form-control mail-form" name="mail_group" id="mail_group">
            </div>

            <div class="col-sm-4">
                <label for="referrence_by" class="form-label">Referrence<span style="color: red">*</span></label>
                </div>

                <div class="col-sm-8">
                <input type="text" class="form-control mail-form" name="referred_by" id="referred_by" required>
            </div>

<div class="row">
    <div class="col-md-12 bg-light text-right">
        <button type="button" class="btn btn-primary">Submit</button>
    </div>
</div>

        </form>

    </div>

</div>
@endsection
