@extends('admin.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add New Vehicle
                            <a href="{{ url('vehicle') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('vehicle.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Make</label>
                                <input type="text" name="make" class="form-control" />
                                @error('make') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Model</label>
                                <input type="text" name="model" class="form-control" />
                                @error('model') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Year</label>
                                <input type="number" name="year" class="form-control" />
                                @error('year') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>License Plate</label>
                                <input type="text" name="license_plate" class="form-control" />
                                @error('license_plate') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
