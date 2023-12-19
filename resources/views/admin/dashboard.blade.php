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
                <h5>{{$todaySale}} Unit</h5>
            </div>
        </div>
        <div class="analytic">
            <div class="analytic-icon"><span class="las la-clock"></span></div>
            <div class="analytic-info">
                <h4>Yesterday Sales</h4>
                <h5>{{$yesterdaySale}} Unit</h5>
            </div>
        </div>
        <div class="analytic">
            <div class="analytic-icon"><span class="las la-users"></span></div>
            <div class="analytic-info">
                <h4>This Month Sales</h4>
                <h5>{{$thisMonthSale}} Unit</h5>
            </div>
        </div>
        <div class="analytic">
            <div class="analytic-icon"><span class="las la-heart"></span></div>
            <div class="analytic-info">
                <h4>Last Month Sales</h4>
                <h5>{{$lastMonthSale}} Unit</h5>
            </div>
        </div>
    </div>
    <section>
        <h3 class="section-head">Product Details</h3>
        <div class="sell-product">
            <table class="table border sahdow">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Current Unit</th>
                        <th scope="col">Sell</th>
                        <th scope="col">Total Unit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $value => $item)
                    <tr>
                        <th scope="row">{{$value + 1}}</th>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->price}} Taka</td>
                        <td>{{ $item->unit - $item->sell}}</td>
                        <td>
                            {{ $item->sell}}
                        </td>

                        <td>{{ $item->unit}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </section>
</section>

@endsection