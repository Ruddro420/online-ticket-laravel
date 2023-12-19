@extends('layouts.admin_layout')
@section('content')
<section>
    <h3 class="section-head">Add Product</h3>
    <div class="add-product">
        <form method="POST" action="{{route('product.add')}}">
            @csrf
            <div class="form-group">
                <label for="">Product Name</label>
                <input name="name" type="text" class="form-control" id="" aria-describedby="emailHelp"
                    placeholder="Product Name">
            </div><br>
            <div class="form-group">
                <label for="">Product Price</label>
                <input name="price" type="number" class="form-control" id="" placeholder="Product Price">
            </div><br>
            <div class="form-group">
                <label for="">Product Unit</label>
                <input name="unit" type="number" class="form-control" id="" placeholder="Product Unit">
            </div><br>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>

</section>

@endsection