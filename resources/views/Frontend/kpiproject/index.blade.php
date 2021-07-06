@extends('layouts.frontend')

@section('main')


<div class="container">

<form action="{{ route('sewing.machine') }}"}} method="POST">
    @csrf
    <table>
<tr>
    <td>1. Brand Name </td>
    <td>
        <select class="form-control" name="brand">
            <option value="" selected>---Select Brand---</option>
            <option value="Brother"> Brother </option>
            <option value="Supreme"> Supreme </option>
            <option value="Juki"> Juki </option>
            <option value="Zoje">Zoje</option>
            <option value="Jack">Jack</option>
            <option value="Pegasus">Pegasus</option>
            <option value="Kansai">Kansai</option>
            <option value="SHENGTIAN">SHENGTIAN</option>
            <option value="Yamato">Yamato</option>
        </select>
    </td>
</tr>

    <tr>
        <td>2. Machine Name </label></td>
        <td>
            <select class="form-control" name="machine_name">
                <option value="" selected>---Select Machine---</option>
                <option value="P/M"> Plain Machine </option>
                <option value="O/L"> Over Lock Machine </option>
                <option value="F/L">Flat Lock</option>
                <option value="F/B">Flat Bed</option>
                <option value="PMD">PMD</option>
                <option value="S/B">Snap Button</option>
                <option value="VTM">VT Machine</option>
            </select>
        </td>
    </tr>


    <tr>
        <td>3. Machine Serial No.</td>
        <td><input class="form-control" name="serial_no" type="text" placeholder="Input machine serial" required></td>
    </tr>

    <tr>
        <td>4. Supplier </td>
        <td><select  class="form-control" name="supplier">
                <option value="" selected>---Select Supplier--</option>
                <option value="NZ"> NAZ </option>
                <option value="CA"> CA </option>
                <option value="SHAHARA"> SHAHARA </option>
            </select>
        </td>
    </tr>

    <input type="hidden" name="machine_no" id="machine_no" value="0">

    <tr>
        <td>5. Line No. </td>

        <td> <select class="form-control" name="line_no">
                <option value="" selected>---Select Line--</option>
                <option value="Line-1"> Line-1 </option>
                <option value="Line-2"> Line-2 </option>
                <option value="Line-3"> Line-3 </option>
                <option value="Line-4"> Line-4 </option>
                <option value="Line-5"> Line-5 </option>
                <option value="Line-6"> Line-6 </option>
                <option value="Line-7"> Line-7 </option>
                <option value="Line-8"> Line-8 </option>
                <option value="Line-9"> Line-9 </option>
                <option value="Line-10"> Line-10 </option>
                <option value="Line-11"> Line-11 </option>
                <option value="Line-12"> Line-12 </option>
                <option value="Line-13"> Line-13 </option>
                <option value="Line-14"> Line-14 </option>
                <option value="Line-15"> Line-15 </option>
                <option value="Line-16"> Line-16 </option>
                <option value="Line-17"> Line-17 </option>
                <option value="Line-18"> Line-18 </option>
                <option value="Line-19"> Line-19 </option>
                <option value="Line-20"> Line-20 </option>
                <option value="Line-21"> Line-21 </option>
                <option value="Line-22"> Line-22 </option>
                <option value="Line-23"> Line-23 </option>
                <option value="Line-24"> Line-24 </option>
            </select>
        </td>
    </input>

    <tr>
        <td>6. Unit </td>
        <td>
            <select class="form-control" name="unit">
                <option value="" selected>---Select Unit---</option>
                <option value="Unit-1"> Unit-1 </option>
                <option value="Unit-2"> Unit-2 </option>
            </select>
        </td>
    </tr>

    <tr>
        <td>7. Machine Type </td>
        <td>
            <select class="form-control" name="type">
                <option value="" selected>---Select machine type---</option>
                <option value="Local"> Local </option>
                <option value="Rent"> Rent </option>
            </select>
        </td>
    </tr>

    <tr>
        <td>8. Status </td>
        <td>
            <select class="form-control" name="status">
                <option value="Active" selected> Active </option>
                <option value="Inactive"> Inactive </option>
                <option value="On repair"> On repair </option>
            </select>
        </td>
    </tr>
</table>

<button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>



@endsection
