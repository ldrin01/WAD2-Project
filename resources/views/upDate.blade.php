@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Add Unit</h1></div>

                <div class="panel-body">
                <form action="/saveProcess/{{$unit->id}}" method="PATCH">
                <table class="table ">
					<tr>
						<td><label> Driver Name </label></td>
						<td><input type="text" name="driver_name" value="{{$unit->driver_name}}"></td>
					</tr>
					<tr>
						<td><label> Unit Number <label></td>
						<td><input type="text" name="unit_number" value="{{$unit->unit_number}}"></td>
					</tr>
					<tr>
						<td><label> Unit Type <label></td>
						<td><input type="text" name="unit_type" value="{{$unit->unit_type}}"></td>
					</tr>
					<tr>
						<td><label> Plate Number <label></td>
						<td><input type="text" name="plate_number" value="{{$unit->plate_number}}"></td>
					</tr>
					</tr>
				</table> 
				<table>
					<p>
					<input type="submit" value="Save" class="btn btn-success">    
                </form>
                	<a href="/cancel"><input type="submit" value="Cancel" class="btn btn-danger top-right"></a>
                	</p>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
