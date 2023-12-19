@extends('layouts.admin_layout')
@section('content')
<section>
    <h3 class="section-head">Overview</h3>
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <div class="analytics">
        <div class="analytic">
            <div class="analytic-icon"><span class="las la-eye"></span></div>
            <div class="analytic-info">
                <h4>Today Sales</h4>
                <h1>10.3M</h1>
            </div>
        </div>
        <div class="analytic">
            <div class="analytic-icon"><span class="las la-clock"></span></div>
            <div class="analytic-info">
                <h4>Yesterday Sales</h4>
                <h1>20.9k <small class="text-danger">5%</small></h1>
            </div>
        </div>
        <div class="analytic">
            <div class="analytic-icon"><span class="las la-users"></span></div>
            <div class="analytic-info">
                <h4>This Month Sales</h4>
                <h1>1.3k <small class="text-success">12%</small></h1>
            </div>
        </div>
        <div class="analytic">
            <div class="analytic-icon"><span class="las la-heart"></span></div>
            <div class="analytic-info">
                <h4>Last Month Sales</h4>
                <h1>3.4M </h1>
            </div>
        </div>
    </div>
</section>
@endsection