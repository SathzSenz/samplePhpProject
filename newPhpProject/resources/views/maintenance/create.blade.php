@extends('admin.layout')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <div class="">
        <button class="p-8 mb-2" onclick="history.back()">
            <i class="bi bi-arrow-left"></i>
        </button>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Maintenance for {{ $vehicle->make }} {{ $vehicle->model }} ({{ $vehicle->license_plate }})
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('vehicle.maintenance.store', $vehicle) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="date">Date</label>
                                <input type="date" name="date" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="cost">Cost</label>
                                <input type="number" name="cost" class="form-control" step="0.01" required>
                            </div>
                            <div class="mb-3">
                                <label for="mechanic_id">Mechanic</label>
                                <select name="mechanic_id" class="form-control" required>
                                    <option value="">Select Mechanic</option>
                                    @foreach($mechanics as $mechanic)
                                        <option value="{{ $mechanic->id }}">{{ $mechanic->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
