@extends('maintenance.layout') <!-- Adjust layout path accordingly -->

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Maintenance Records for {{ $vehicle->make }} {{ $vehicle->model }}</h1>

            <a href="{{ route('vehicle.maintenance.create', $vehicle) }}" class="btn btn-primary">Add Maintenance Record</a>
        </div>
        @if ($maintenances->isEmpty())
            <p class="mt-4">No maintenance records found for this vehicle.</p>
        @else
            <div class="card-body">
                <table class="table mt-4">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Cost</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($maintenances as $index => $maintenance)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $maintenance->description }}</td>
                            <td>{{ $maintenance->date }}</td>
                            <td>${{ number_format($maintenance->cost, 2) }}</td>
                            <td>
                                <a href="{{ route('vehicle.maintenance.edit', [$vehicle, $maintenance]) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('vehicle.maintenance.destroy', [$vehicle, $maintenance]) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection