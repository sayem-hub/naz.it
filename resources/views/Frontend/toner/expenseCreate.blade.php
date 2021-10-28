@extends('layouts.frontend')
@section('main')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <h3 class="text-center mt-3">Toner expense entry</h3>
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
                <label for="section" class="form-label">Section</label>
                <input type="text" class="form-control" name="section" id="section">
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

@endsection
