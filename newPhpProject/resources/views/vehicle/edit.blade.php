@extends('vehicle.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Category
                            <a href="{{ url('vehicle') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('vehicle.update', $vehicle->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label>Make</label>
                                <input type="text" name="make" class="form-control" value="{{ $vehicle->make }}" />
                                @error('make') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Model</label>
                                <input type="text" name="model" class="form-control" value="{{ $vehicle->model }}" />
                                @error('model') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Year</label>
                                <input type="number" name="year" class="form-control" value="{{ $vehicle->year }}" />
                                @error('year') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>License Plate</label>
                                <input type="text" name="license_plate" class="form-control" value="{{ $vehicle->license_plate }}" />
                                @error('licence_plate') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
