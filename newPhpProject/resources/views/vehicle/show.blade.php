@extends('admin.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Show Vehicle Details
                            <a href="{{ url('vehicle') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Make</label>
                            <p>
                                {{ $vehicle->make }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Model</label>
                            <p>
                                {{ $vehicle->model }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Year</label>
                            <p>
                                {{ $vehicle->year }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>License Plate</label>
                            <p>
                                {{ $vehicle->license_plate }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
