@extends('admin.layout')

@section('content')
    <h3>Add Maintenance for {{ $vehicle->make }} {{ $vehicle->model }} ({{ $vehicle->license_plate }})</h3>

    <form action="{{ route('vehicle.maintenance.store', $vehicle) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cost">Cost</label>
            <input type="number" name="cost" class="form-control" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
