@extends('admin.layout')

@section('content')
    <div class="container-fluid mt-6">
        <div class="row ">
                <div class="row justify-content-between">
                    <!-- Card 1 -->
                    <div class="col-md-4 mb-3">
                        <div class="card text-center shadow">
                            <div class="card-body">
                                <h5 class="card-title">Total Vehicles</h5>
                                <p class="card-text display-4">150</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-4 mb-3">
                        <div class="card text-center shadow">
                            <div class="card-body">
                                <h5 class="card-title">Total Maintenances</h5>
                                <p class="card-text display-4">25</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-4 mb-3">
                        <div class="card text-center shadow">
                            <div class="card-body">
                                <h5 class="card-title">Total Revenue</h5>
                                <p class="card-text display-4">$1,200</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
