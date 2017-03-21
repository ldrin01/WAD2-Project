@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Units</h1></div>

                <div class="panel-body">
                    <a href="/addUnit"><input type="submit" value="Add Unit" class="btn btn-primary"></a>
                                 <br><br>
                                 <table class="table table-striped table-hover">
                                <tr>
                                    <th>Driver Name</th>
                                    <th>Unit Number</th>
                                    <th>Unit Type</th>
                                    <th>Plate Number</th>
                                    <th>Options</th>
                                    <th></th>
                                </tr>
                        @foreach ($units as $unit)
                                <tr>
                                    <td>{{ $unit->driver_name }}</td>
                                    <td>{{ $unit->unit_number }}</td>
                                    <td>{{ $unit->unit_type }}</td>
                                    <td>{{ $unit->plate_number }}</td>
                                    <td><a href="/update/{{$unit->id}}"><input type="submit" value="Update" class="btn btn-info"></a></td>
                                    <td><a href="/deleteUnit/{{$unit->id}}"><input type="submit" value="Delete" class="btn btn-danger"></a></td>
                                </tr>
                        
                        @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
