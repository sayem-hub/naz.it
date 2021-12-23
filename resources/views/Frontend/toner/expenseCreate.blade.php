@extends('layouts.frontend')
@section('main')


<section class="contact-section pt-100">
    <div class="container">
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-5">

        <h4 class="text-center mt-3">Toner expense entry</h4>
        <form action="{{route('toner.expense.create')}}" method="post">
            @csrf

            <div class="mb-3">
                <label for="date" class="form-label">Date & Time</label>
                <input type="datetime-local" class="form-control" name="date" id="date">

            </div>

            <div class="mb-3">
                <label for="toner_model" class="form-label">Toner model</label>
                <select class="form-control" name="toner_model">
                    <option value="" selected>--Select toner model--</option>
                    <option value="85A">85A</option>
                    <option value="26A">26A</option>
                    <option value="93A">93A</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="section" class="form-label">Section/Department</label>
                <select class="form-control" name="section">
                    <option value="" selected>--Select section--</option>
                    <option value="Accounts">Accounts</option>
                    <option value="Payroll">Payroll</option>
                    <option value="Merchandising">Merchandising</option>
                    <option value="Admin">Admin</option>
                    <option value="IE & Planning">IE & Planning</option>
                    <option value="Compliance">Compliance</option>
                    <option value="KPI">KPI</option>
                    <option value="Cutting-MIS">Cutting-MIS</option>
                    <option value="Sample-RMG">Sample-RMG</option>
                    <option value="Dyeing">Dyeing</option>
                    <option value="Dyeing Production">Dyeing Production</option>
                    <option value="Dyeing Planning">Dyeing Planning</option>
                    <option value="Dyeing Finishing">Dyeing Finishing</option>
                    <option value="Dyeing Batch">Dyeing Batch</option>
                    <option value="Knitting">Knitting</option>
                    <option value="Knitting Planning">Knitting Planning</option>
                    <option value="Knitting Label">Knitting Label</option>
                    <option value="Knitting Store">Knitting Store</option>
                    <option value="General Store">General Store</option>
                    <option value="Inventory">Inventory</option>
                    <option value="Chemical Store">Chemical Store</option>
                    <option value="Sewing Store">Sewing Store</option>
                    <option value="Civil">Civil</option>
                    <option value="Shahriar Sir">Shahriar Sir</option>
                    <option value="Finishing-RMG">Finishing-RMG</option>
                    <option value="Quality-RMG">Quality-RMG</option>
                    <option value="Quality-ZXY">Quality-ZXY</option>
                    <option value="Quality-Aldi">Quality-Aldi</option>
                    <option value="Quality-GP">Quality-GP</option>
                    <option value="Quality-Otto">Quality-Otto</option>
                    <option value="AOP">AOP</option>
                    <option value="AOP Design">AOP Design</option>
                    <option value="CAD">CAD</option>
                    <option value="Maintenance">Maintenance</option>
                    <option value="Printing">Printing</option>
                    <option value="Embroidery">Embroidery</option>
                    <option value="NZ Accessories">NZ Accessories</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="printer_model" class="form-label">Printer model</label>
               <select class="form-control" name="printer_model">
                <option value="" selected>--Select printer model--</option>
                <option value="Unknown" >Unknown</option>
                <option value="HP P1102">HP P1102</option>
                <option value="Canon LBP6030">Canon LBP6030</option>
                <option value="HP M402dn">HP M402dn</option>
                <option value="HP M706n">HP M706n</option>
                <option value="Canon 6230 DN">Canon LBP6230DN</option>
            </select>
            </div>

            <div class="mb-3">
                <label for="recipient" class="form-label">Recipient</label>
                <input type="text" class="form-control" name="recipient" id="recipient">
            </div>


            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" class="form-control" name="notes" id="notes">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>
</div>
</section>
@endsection
