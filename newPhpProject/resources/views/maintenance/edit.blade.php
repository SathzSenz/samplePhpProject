@extends('admin.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Maintenance for {{ $vehicle->make }} {{ $vehicle->model }} ({{ $vehicle->license_plate }})</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('vehicle.maintenance.update', [$vehicle, $maintenance]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" value="{{ $maintenance->description }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="date">Date</label>
                                <input type="date" name="date" class="form-control" value="{{ $maintenance->date }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="cost">Cost</label>
                                <input type="number" name="cost" class="form-control" value="{{ $maintenance->cost }}" step="0.01" required>
                            </div>
                            <div class="mb-3">
                                <label for="mechanic_id" class="form-label">Mechanic</label>
                                <select class="form-select" id="mechanic_id" name="mechanic_id" required>
                                    <option value="">Select a mechanic</option>
                                    @foreach ($mechanics as $mechanic)
                                        <option value="{{ $mechanic->id }}" {{ $maintenance->mechanic_id == $mechanic->id ? 'selected' : '' }}>
                                            {{ $mechanic->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
