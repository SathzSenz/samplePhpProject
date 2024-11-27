@extends('admin.layout')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <div class="p-8 mb-2">
        <a style="background-color: rgba(224, 224, 224, 0.8); color: white; padding: 5px; border-radius: 5px;" href="{{ route('vehicle.index') }}">
            <i class="bi bi-arrow-left @" style="color: black"></i>
        </a>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="pt-2 pb-2">Maintenance Records for {{ $vehicle->make }} {{ $vehicle->model }} ({{ $vehicle->license_plate }})
                <a href="{{ route('vehicle.maintenance.create', $vehicle) }}" class="btn btn-primary float-end">Add Maintenance Record</a>
            </h4>
        </div>
        @if ($maintenances->isEmpty())
            <p class="mt-4">No maintenance records found for this vehicle.</p>
        @else
            <div class="card-body">
                <table class="table mt-2">
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
                            <td>Rs. {{ number_format($maintenance->cost, 2) }}</td>
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
