@extends('layouts.app')

@section('content')
<div id="home" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>

            <br>

            @can('is_system_admin')
            <div class="card text-white bg-success">
                <div class="card-header"><span>System Admin only</span> <span>create | update | delete</span></div>
            </div>
            <br>
            @endcan

            @canany(['is_system_admin', 'is_business_admin'])
            <div class="card text-white bg-danger">
                <div class="card-header"><span>Business Admin only</span> <span>create | update | delete</span></div>
            </div>
            <br>
            @endcanany

            @canany(['is_system_admin', 'is_business_admin', 'is_channel_owner'])
            <div class="card bg-warning">
                <div class="card-header"><span>Channel Owner only</span> <span>create | update | delete</span></div>
            </div>
            <br>
            @endcanany

            @canany(['is_system_admin', 'is_business_admin', 'is_channel_owner', 'is_customer'])
            <div class="card text-white bg-info">
                <div class="card-header"><span>Customer only</span> <span>create | update | delete</span></div>
            </div>
            @endcanany
            
        </div>
    </div>
</div>
@endsection
