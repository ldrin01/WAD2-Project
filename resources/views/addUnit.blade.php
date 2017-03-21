@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Add Unit</h1></div>

                <div class="panel-body">
                <form action="/addProcess" method="PATCH">
                <table class="table">
					<tr>
						<td><label> Driver Name </label></td>
						<td><input type="text" name="driver_name" required></td>
					</tr>
					<tr>
						<td><label> Unit Number <label></td>
						<td><input type="text" name="unit_number" required></td>
					</tr>
					<tr>
						<td><label> Unit Type <label></td>
						<td><input type="text" name="unit_type" required></td>
					</tr>
					<tr>
						<td><label> Plate Number <label></td>
						<td><input type="text" name="plate_number" required></td>
					</tr>
					</tr>
				</table> 
					<input type="submit" value="Add Unit" class="btn btn-success">    
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
