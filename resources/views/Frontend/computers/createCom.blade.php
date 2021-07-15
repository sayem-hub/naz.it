@extends('layouts.frontend')

@section('main')

<div class="row" style="color: rgb(71, 67, 67)">
    <div class="col-md-2"></div>
    <div class="col-md-7">

        <h3 class="text-center mt-3">Add New Computer</h3>
        <form action="{{route('computer.user.create')}}" method="post">
          @csrf
           <div class="mb-3">
                <label for="ComputerID" class="form-label">Computer ID</label>
                <input type="text" class="form-control" name="ComputerID" id="ComputerID">
            </div>

            <div class="mb-3">
                <label for="EmployeeID" class="form-label">Employee ID</label>
                <input type="text" class="form-control" name="Emp_id" id="EmployeeID">
            </div>

            <div class="mb-3">
                <label for="User" class="form-label">User Name</label>
                <input type="text" class="form-control" name="User" id="User">
            </div>


            <div class="mb-3">
                <label for="Designation" class="form-label">Designation</label>
                <input type="text" class="form-control" name="Designation" id="Designation">
            </div>

            <div class="mb-3">
                <label for="ComType" class="form-label">Computer Type</label>
                <select class="form-control" name="ComType">
                    <option value="Desktop" selected>Desktop</option>
                    <option value="Laptop">Laptop</option>
                    <option value="iMAC">iMAC</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Brand" class="form-label">Brand</label>
                <select class="form-control" name="Brand">
                    <option value="HP" selected>HP</option>
                    <option value="Dell">Dell</option>
                    <option value="Asus">Asus</option>
                    <option value="Acer">Acer</option>
                    <option value="Lenovo">Lenovo</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Spec" class="form-label">Specification</label>
                <input type="text" class="form-control" name="Spec" id="Spec" placeholder="Processor model, RAM size, HDD/SSD Size">
            </div>

            <div class="mb-3">
                <label for="Monitor" class="form-label">Monitor/Display</label>
                <select class="form-control" name="Monitor">
                    <option value="Dell 19 Inch" selected>Dell 19 Inch</option>
                    <option value="HP 19 Inch">HP 19 Inch</option>
                    <option value="LG 19 Inch">LG 19 Inch</option>
                    <option value="Samsung 19 Inch">Samsung 19 Inch</option>
                    <option value="Asus 19 Inch">Asus 19 Inch</option>
                    <option value="Dell 22 Inch">Dell 22 Inch</option>
                    <option value="HP 22 Inch">HP 22 Inch</option>
                    <option value="Asus 24 Inch">Asus 24 Inch</option>
                    <option value="Samsung 22 Inch">Samsung 22 Inch</option>
                    <option value="LG 14 Inch">LG 14 Inch</option>
                    <option value="LG 16 Inch">LG 16 Inch</option>
                    <option value="AOC 14 Inch">AOC 14 Inch</option>
                    <option value="AOC 19 Inch">AOC 19 Inch</option>
                    <option value="Acer 19 Inch">Acer 19 Inch</option>
                    <option value="Asus 16 Inch">Asus 16 Inch</option>
                    <option value="Benq 14 Inch">Benq 14 Inch</option>
                    <option value="Dell 24 Inch">Dell 24 Inch</option>
                    <option value=" Lap-14.1 Inch">Lap-14.1 Inch</option>
                    <option value=" Lap-15.6 Inch">Lap-15.6 Inch</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Mouse" class="form-label">Mouse</label>
                <select class="form-control" name="Mouse">
                    <option value="N/A">N/A</option>
                    <option value="A4TECH" selected>A4TECH</option>
                    <option value="Logitech">Logitech</option>
                    <option value="Delux">Delux</option>
                    <option value="HP">HP</option>
                    <option value="Jeway">Jeway</option>
                    <option value="Syntax">Syntax</option>
                    <option value="Newmen">Newmen</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Keyboard" class="form-label" >Keyboard</label>
                <select class="form-control" name="Keyboard">
                    <option value="N/A">N/A</option>
                    <option value="A4TECH" selected>A4TECH</option>
                    <option value="Logitech">Logitech</option>
                    <option value="Delux">Delux</option>
                    <option value="Newman">Newman</option>
                    <option value="HP">HP</option>
                    <option value="Jeway">Jeway</option>
                    <option value="Syntax">Syntax</option>
                    <option value="Flora">Flora</option>
                    <option value="Asus">Asus</option>
                    <option value="Dell">Dell</option>
                    <option value="Classic">Classic</option>
                </select>
            </div>



            <div class="mb-3">
                <label for="UPS" class="form-label">UPS</label>
                <select class="form-control" name="UPS">
                    <option value="N/A" selected>N/A</option>
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
                <input type="text" class="form-control" name="IPAdd" id="IPAdd">
            </div>

            <div class="mb-3">
                <label for="EmailAddress" class="form-label">Email Address</label>
                <input type="text" class="form-control" name="EmailAddress" id="EmailAddress">
            </div>

            <div class="mb-3">
                <label for="Section" class="form-label">Section</label>
                <select class="form-control" name="Section">
                    <option value="HR & Admin" selected>HR & Admin</option>
                    <option value="Merchandising">Merchandising</option>
                    <option value="IT">IT</option>
                    <option value="MIS">MIS</option>
                    <option value="Internal Audit">Internal Audit</option>
                    <option value="Compliance">Compliance</option>
                    <option value="Payroll">Payroll</option>
                    <option value="PD">PD</option>
                    <option value="Accounts">Accounts</option>
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
                    <option value="Design">Design</option>
                    <option value="Embroidery">Embroidery</option>
                    <option value="Printing">Printing</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Department" class="form-label">Department</label>
                <select class="form-control" name="Department">
                    <option value="HR & Admin" selected>HR & Admin</option>
                    <option value="Merchandising">Merchandising</option>
                    <option value="ICT">ICT</option>
                    <option value="Audit">Audit</option>
                    <option value="Accounts">Accounts</option>
                    <option value="Compliance">Compliance</option>
                    <option value="IE & Planning">IE & Planning</option>
                    <option value="RMG">RMG</option>
                    <option value="Knitting">Knitting</option>
                    <option value="Dyeing">Dyeing</option>
                    <option value="All Over Print">All Over Print</option>
                    <option value="Store">Store</option>
                    <option value="NZ Accessories">NZ Accessories</option>
                    <option value="Embroidery">Embroidery</option>
                    <option value="Printing">Printing</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Status" class="form-label">Status</label>
                <select class="form-control" name="Status">
                    <option value="Running" selected>Running</option>
                    <option value="Idle">Idle</option>
                    <option value="In Repair">On Repair</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Remarks" class="form-label">Remarks</label>
                <input type="text" class="form-control" name="Remarks" id="Remarks">
            </div>


            <button type="submit" class="btn btn-primary">Create</button>
          </form>

    </div>

</div>


@endsection
