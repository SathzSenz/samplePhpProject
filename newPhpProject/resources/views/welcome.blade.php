@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Main Content -->
            <div class="col-md-9 main-content">
                <div class="row mt-4">
                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="card text-center shadow">
                            <div class="card-body">
                                <h5 class="card-title">Total Users</h5>
                                <p class="card-text display-4">150</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <div class="card text-center shadow">
                            <div class="card-body">
                                <h5 class="card-title">New Signups</h5>
                                <p class="card-text display-4">25</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <div class="card text-center shadow">
                            <div class="card-body">
                                <h5 class="card-title">Total Revenue</h5>
                                <p class="card-text display-4">$1,200</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <!-- Recent Activity -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Recent Activity</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">User John Doe updated their profile</li>
                                    <li class="list-group-item">New user Jane Smith signed up</li>
                                    <li class="list-group-item">Admin added new settings</li>
                                    <li class="list-group-item">Monthly revenue report generated</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
