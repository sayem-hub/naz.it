@extends('layouts.frontend')

@section('main')

<div class="row" style="color: rgb(71, 67, 67)">
    <div class="col-md-3"></div>
    <div class="col-md-6">

        <h3 class="text-center mt-3">Add New Tablet</h3>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <form action="{{route('tablet.create')}}" method="post">
          @csrf
           <div class="mb-3">
                <label for="tab_id" class="form-label">Tab ID</label>
                <input type="text" class="form-control" name="tab_id" id="tab_id" value="NAZTAB-">
            </div>

            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
               <select class="form-control" name="brand">
                   <option value="" selected>---Select Brand---</option>
                    <option value="Lenovo" >Lenovo</option>
                    <option value="Samsung">Samsung</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" name="model" id="model" placeholder="Write model no.">
            </div>


            <div class="mb-3">
                <label for="size" class="form-label">Size</label>
                <select class="form-control" name="size">
                    <option value="8 Inch" selected>8 Inch</option>
                    <option value="7 Inch">7 Inch</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="serial" class="form-label">Serial No</label>
               <input type="text" class="form-control" name="serial" id="serial" placeholder="Write serial no.">
            </div>

            <div class="mb-3">
                <label for="imei_1" class="form-label">IMEI 1</label>
                <input type="text" class="form-control" name="imei_1" id="imei_1" placeholder="Write IMEI 1">
            </div>

            <div class="mb-3">
                     <label for="imei_2" class="form-label">IMEI 2</label>
                    <input type="text" class="form-control" name="imei_2" id="imei_2" placeholder="Write IMEI 2">
            </div>

            <div class="mb-3">
                <label for="user" class="form-label">User</label>
                <input type="text" class="form-control" name="user" id="user" placeholder="Write user name">
            </div>

            <div class="mb-3">
                <label for="emp_id" class="form-label">Employee ID</label>
                <input type="text" class="form-control" name="emp_id" id="emp_id" placeholder="Write employee ID no.">
            </div>

            <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" name="designation" id="designation" placeholder="">
            </div>

                <div class="mb-3">
                        <label for="Section" class="form-label">Section</label>
                        <select class="form-control" name="section">
                            <option value="MIS">MIS</option>
                            <option value="KPI" selected>KPI</option>
                            <option value="IT">IT</option>
                            <option value="Quality">Quality</option>
                         </select>
                </div>

            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select class="form-control" name="department">
                    <option value="ICT" selected>ICT</option>
                    <option value="Knitting">Knitting</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="line_no" class="form-label">Line No</label>
                <select class="form-control" name="line_no">
                    <option value="" selected>---Select Line---</option>
                    <option value="Line-01" >Line-01</option>
                    <option value="Line-02">Line-02</option>
                    <option value="Line-03">Line-03</option>
                    <option value="Line-04">Line-04</option>
                    <option value="Line-05">Line-05</option>
                    <option value="Line-06">Line-06</option>
                    <option value="Line-07">Line-07</option>
                    <option value="Line-08">Line-08</option>
                    <option value="Line-09">Line-09</option>
                    <option value="Line-10">Line-10</option>
                    <option value="Line-11">Line-11</option>
                    <option value="Line-12">Line-12</option>
                    <option value="Line-13">Line-13</option>
                    <option value="Line-14">Line-14</option>
                    <option value="Line-15">Line-15</option>
                    <option value="Line-16">Line-16</option>
                    <option value="Line-17">Line-17</option>
                    <option value="Line-18">Line-18</option>
                    <option value="Line-19">Line-19</option>
                    <option value="Line-20">Line-20</option>
                    <option value="Line-21">Line-21</option>
                    <option value="Line-22">Line-22</option>
                    <option value="Line-23">Line-23</option>
                    <option value="Line-24">Line-24</option>
                    <option value="Line-25">Line-25</option>
                    <option value="Line-26">Line-26</option>
                    <option value="Line-27">Line-27</option>
                    <option value="Line-28">Line-28</option>
                    <option value="Line-51">Line-51</option>
                    <option value="Line-52">Line-52</option>
                    <option value="Line-53">Line-53</option>
                    <option value="Line-54">Line-54</option>
                    <option value="Line-55">Line-55</option>
                    <option value="Line-56">Line-56</option>
                    <option value="Line-57">Line-57</option>
                    <option value="Line-58">Line-58</option>
                    <option value="Line-59">Line-59</option>
                    <option value="Line-60">Line-60</option>
                    <option value="Line-61">Line-61</option>
                    <option value="Line-62">Line-62</option>
                    <option value="Line-63">Line-63</option>
                    <option value="Line-64">Line-64</option>
                    <option value="Line-65">Line-65</option>
                    <option value="Line-66">Line-66</option>
                    <option value="Line-67">Line-67</option>
                    <option value="Line-68">Line-68</option>
                    <option value="Line-69">Line-69</option>
                    <option value="Line-70">Line-70</option>
                    <option value="Line-71">Line-71</option>
                    <option value="Line-72">Line-72</option>
                    <option value="Line-73">Line-73</option>
                    <option value="Line-74">Line-74</option>
                    <option value="Line-75">Line-75</option>
                    <option value="Line-76">Line-76</option>
                    <option value="Line-77">Line-77</option>
                    <option value="Line-78">Line-78</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Status" class="form-label">Status</label>
                <select class="form-control" name="status">
                    <option value="Running" selected>Running</option>
                    <option value="Idle">Idle</option>
                    <option value="In Repair">In Repair</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <input type="text" class="form-control" name="notes" id="notes">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
          </form>

    </div>

</div>


@endsection
