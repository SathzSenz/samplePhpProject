@extends('vehicle.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @session('status')
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endsession

                <div class="card">
                    <div class="card-header">
                        <h4>List of Vehicles
                            <a href="{{ url('vehicle/create') }}" class="btn btn-primary float-end">Add New Vehicle</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-stiped table-bordered">
                            <thead>
                            <tr>
                                <th>Vehicle Id</th>
                                <th>Make</th>
                                <th>Model</th>
                                <th>Year</th>
                                <th>License Plate</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($vehicles as $vehicle)
                                <tr>
                                    <td>{{ $vehicle->id }}</td>
                                    <td>{{ $vehicle->make }}</td>
                                    <td>{{ $vehicle->model }}</td>
                                    <td>{{ $vehicle->year }}</td>
                                    <td>{{ $vehicle->license_plate }}</td>

                                    <td>
                                        <a href="{{ route('vehicle.edit', $vehicle->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('vehicle.show', $vehicle->id) }}" class="btn btn-info">Show</a>
                                        <a href="{{ route('vehicle.maintenance.index', $vehicle) }}" class="btn btn-info btn-sm">View Maintenance</a>

                                        <form action="{{ route('vehicle.destroy', $vehicle->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this vehicle?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $vehicles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
