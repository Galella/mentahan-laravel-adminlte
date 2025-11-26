@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Admin Dashboard</h3>
                </div>
                <div class="card-body">
                    <p>Welcome to the admin dashboard, {{ auth()->user()->name }}!</p>
                    <p>You have administrator privileges.</p>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>Users</h3>
                                    <p>Manage system users</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>Roles</h3>
                                    <p>Manage user roles</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-tag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>Settings</h3>
                                    <p>System settings</p>
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