@extends('admin.layout')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <div class="p-8 mb-2">
        <a
            href="{{ route('vehicle.index') }}"
            style="background-color: rgba(224, 224, 224, 0.8); color: white; padding: 5px; border-radius: 5px;"
            class="d-inline-block"
        >
            <i class="bi bi-arrow-left" style="color: black"></i>
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="pt-2 pb-2 text-center text-md-start">
                Maintenance Records for {{ $vehicle->make }} {{ $vehicle->model }} ({{ $vehicle->license_plate }})
                <a href="{{ route('vehicle.maintenance.create', $vehicle) }}" class="btn btn-primary float-md-end mt-2 mt-md-0">Add Maintenance Record</a>
            </h4>
        </div>

        @if ($maintenances->isEmpty())
            <p class="mt-4 text-center">No maintenance records found for this vehicle.</p>
        @else
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered text-center">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Cost</th>
                            <th>Mechanic Assigned</th>
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
                                <td>{{ $maintenance->mechanic->name ?? 'Not Assigned' }}</td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <a
                                        href="{{ route('vehicle.maintenance.edit', [$vehicle, $maintenance]) }}"
                                        class="btn btn-warning btn-sm me-1"
                                    >
                                        Edit
                                    </a>
                                    <form
                                        action="{{ route('vehicle.maintenance.destroy', [$vehicle, $maintenance]) }}"
                                        method="POST"
                                        style="display:inline;"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this record?')"
                                        >
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
