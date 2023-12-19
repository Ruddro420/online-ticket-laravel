@extends('layouts.admin_layout')
@section('content')
<section>
    <h3 class="section-head">Sell Product</h3>
    <div class="sell-product">
        <table class="table border sahdow">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Current Unit</th>
                    <th scope="col">Sell</th>
                    <th scope="col">Action</th>
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
                    <td>
                        <form method="post" action="{{route('product.update' ,$item->id)}}"
                            enctype="multipart/form-data">
                            @csrf
                            <span><input name="sell" type="number" required></span>
                            <span><button type="submit" class="btn btn-success">Sell</button></span>

                        </form>
                    </td>
                    <td>{{ $item->unit}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</section>

@endsection