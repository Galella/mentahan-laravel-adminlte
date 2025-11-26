@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User Dashboard</h3>
                </div>
                <div class="card-body">
                    <p>Welcome to your dashboard, {{ auth()->user()->name }}!</p>
                    <p>You are logged in as a regular user.</p>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>Profile</h3>
                                    <p>View and edit profile</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>Settings</h3>
                                    <p>User settings</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-cog"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection