@extends('admin.layout')

@section('content')
    <h3>Edit Maintenance for {{ $vehicle->make }} {{ $vehicle->model }} ({{ $vehicle->license_plate }})</h3>

    <form action="{{ route('vehicle.maintenance.update', [$vehicle, $maintenance]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" value="{{ $maintenance->description }}" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" value="{{ $maintenance->date }}" required>
        </div>
        <div class="form-group">
            <label for="cost">Cost</label>
            <input type="number" name="cost" class="form-control" value="{{ $maintenance->cost }}" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
