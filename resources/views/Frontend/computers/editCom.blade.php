@extends('layouts.frontend')

@section('main')

<div class="row" style="color: rgb(80, 75, 75)">
    <div class="col-md-2"></div>
    <div class="col-md-7">

        <h3 class="text-center mt-3">Edit Record</h3>
        <form action="{{route('computer.user.edit',$computer->id)}}" method="post">
        @csrf
            <div class="mb-3">
                <label for="ComputerID" class="form-label">Computer ID</label>
                <input type="text" class="form-control" name="ComputerID" id="ComputerID" value="{{$computer->Comid}}">

            </div>

            <div class="mb-3">
                <label for="User" class="form-label">User Name</label>
                <input type="text" class="form-control" name="User" id="User" value="{{$computer->User}}">
            </div>


            <div class="mb-3">
                <label for="Designation" class="form-label">Designation</label>
                <input type="text" class="form-control" name="Designation" id="Designation" value="{{$computer->Designation}}">
            </div>

            <div class="mb-3">
                <label for="ComType" class="form-label">Computer Type</label>
                <select class="form-control" name="ComType">
                    <option value="{{$computer->Comtype}}" selected>{{$computer->Comtype}}</option>
                    <option value="Desktop">Desktop</option>
                    <option value="Laptop">Laptop</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Monitor" class="form-label">Monitor</label>
                <select class="form-control" name="Monitor">
                    <option value="{{$computer->Monitor}}" selected>{{$computer->Monitor}}</option>
                    <option value="Dell 19 Inch">Dell 19 Inch</option>
                    <option value="HP 19 Inch">HP 19 Inch</option>
                    <option value="LG 19 Inch">LG 19 Inch</option>
                    <option value="Samsung 19 Inch">Samsung 19 Inch</option>
                    <option value="Asus 19 Inch">Asus 19 Inch</option>
                    <option value="Dell 22 Inch">Dell 22 Inch</option>
                    <option value="HP 22 Inch">HP 22 Inch</option>
                    <option value="Samsung 22 Inch">Samsung 22 Inch</option>
                    <option value="LG 14 Inch">LG 14 Inch</option>
                    <option value="LG 16 Inch">LG 16 Inch</option>
                    <option value="AOC 14 Inch">AOC 14 Inch</option>
                    <option value="AOC 19 Inch">AOC 19 Inch</option>
                    <option value="Acer 19 Inch">Acer 19 Inch</option>
                    <option value="Asus 16 Inch">Asus 16 Inch</option>
                    <option value="Benq 14 Inch">Benq 14 Inch</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Mouse	" class="form-label">Mouse</label>
                <select class="form-control" name="Mouse">
                    <option value="{{$computer->Mouse}}" selected>{{$computer->Mouse}}</option>
                    <option value="A4TECH">A4TECH</option>
                    <option value="Logitech">Logitech</option>
                    <option value="Delux">Delux</option>
                    <option value="HP">HP</option>
                    <option value="Jeway">Jeway</option>
                    <option value="Syntax">Syntax</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Keyboard" class="form-label">Keyboard</label>
                <select class="form-control" name="Keyboard">
                    <option value="{{$computer->Keyboard}}" selected>{{$computer->Keyboard}}</option>
                    <option value="A4TECH">A4TECH</option>
                    <option value="Logitech">Logitech</option>
                    <option value="Delux">Delux</option>
                    <option value="Newman">Newman</option>
                    <option value="HP">HP</option>
                    <option value="Jeway">Jeway</option>
                    <option value="Syntax">Syntax</option>
                    <option value="Flora">Flora</option>
                    <option value="Asus">Asus</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="UPS" class="form-label">UPS</label>
                <select class="form-control" name="UPS">
                    <option value="{{$computer->ups}}" selected>{{$computer->ups}}</option>
                    <option value="N/A">N/A</option>
                    <option value="Power Guard">Power Guard</option>
                    <option value="Power Vault">Power Vault</option>
                    <option value="PC Power">PC Power</option>
                    <option value="Spark Power">Spark Power</option>
                    <option value="FSP">FSP</option>
                    <option value="Apollo">Apollo</option>
                    <option value="Digital X">Digital X</option>
                    <option value="Power Pack">Power Pack</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="IPAdd" class="form-label">IP Address</label>
                <input type="text" class="form-control" name="IPAdd" id="IPAdd" value="{{$computer->Ipadd}}">
            </div>

            <div class="mb-3">
                <label for="EmailAddress" class="form-label">Email Address</label>
                <input type="text" class="form-control" name="EmailAddress" id="EmailAddress" value="{{$computer->Email}}">
            </div>

            <div class="mb-3">
                <label for="Section" class="form-label">Section</label>
                <select class="form-control" name="Section">
                    <option value="{{$computer->Section}}" selected>{{$computer->Section}}</option>
                    <option value="HR & Admin">HR & Admin</option>
                    <option value="Merchandising">Merchandising</option>
                    <option value="IT">IT</option>
                    <option value="MIS">MIS</option>
                    <option value="Internal Audit">Internal Audit</option>
                    <option value="Compliance">Compliance</option>
                    <option value="Payroll">Payroll</option>
                    <option value="PD">PD</option>
                    <option value="IE">IE</option>
                    <option value="Quality">Quality</option>
                    <option value="Finishing">Finishing</option>
                    <option value="Planning">Planning</option>
                    <option value="Knitting">Knitting</option>
                    <option value="Dyeing">Dyeing</option>
                    <option value="General Store">General Store</option>
                    <option value="Sewing Store">Sewing Store</option>
                    <option value="Finishing Store">Finishing Store</option>
                    <option value="Knitting Store">Knitting Store</option>
                    <option value="Fabric Store">Fabric Store</option>
                    <option value="Inventory">Inventory</option>
                    <option value="Chemical Store">Chemical Store</option>
                    <option value="Design">Design</option>
                    <option value="NZ Acc Store">NZ Acc Store</option>
                    <option value="Testing LAB">Testing LAB</option>
                    <option value="Washing">Washing</option>
                    <option value="ETP">ETP</option>
                    <option value="Batch">Batch</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Department" class="form-label">Department</label>
                <select class="form-control" name="Department">
                    <option value="{{$computer->Department}}" selected>{{$computer->Department}}</option>
                    <option value="HR & Admin">HR & Admin</option>
                    <option value="Merchandising">Merchandising</option>
                    <option value="ICT">ICT</option>
                    <option value="Audit">Audit</option>
                    <option value="Compliance">Compliance</option>
                    <option value="IE & Planning">IE & Planning</option>
                    <option value="Knitting">Knitting</option>
                    <option value="Dyeing">Dyeing</option>
                    <option value="All Over Print">All Over Print</option>
                    <option value="Store">Store</option>
                    <option value="NZ Accessories">NZ Accessories</option>

                </select>
            </div>

            <div class="mb-3">
                <label for="Status" class="form-label">Status</label>
                <select class="form-control" name="Status">
                    <option value="{{$computer->Status}}" selected>{{$computer->Status}}</option>
                    <option value="Running">Running</option>
                    <option value="Idle">Idle</option>
                    <option value="On Repair">On Repair</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Remarks" class="form-label">Remarks</label>
                <input type="text" class="form-control" name="Remarks" id="Remarks" value="{{$computer->Remarks}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>

</div>


@endsection
