@extends('layout.conquer')
@section('content')
    <h2>Edit Product Fashion</h2>
    <p>Our Product here....

    </p>
    <form method="POST" action="{{ route('products.update', $data->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleEmail">Name of Product</label>
            <input type="text" name="nameProduct" class="form-control" id="nameProduct" aria-describedby="nameHelp"
                placeholder="Enter Name of Product" value="{{ $data->product_name }}">
            <label for="exampleEmail">Price of Product</label>
            <input type="text" name="priceProduct" class="form-control" id="priceProduct" aria-describedby="nameHelp"
                placeholder="Enter Price of Product" value="{{ $data->product_price }}">
            <label class="col-label col-sm-2" for="email">Category</label>
            <select name='proCate' id="cate" class='form-control' value="{{ $data->product_category }}">
                @foreach ($modelCat as $d)
                    <option value="{{ $d->id }}">{{ $d->category_name }}</option>
                @endforeach
            </select>
            <label class="col-label col-sm-2" for="email">Brand</label>
            <select name='proBrand' id="brand" class='form-control' value="{{ $data->product_brand }}">
                @foreach ($modelBrand as $d)
                    <option value="{{ $d->id }}">{{ $d->brand_name }}</option>
                @endforeach
            </select>
            <label class="col-label col-sm-2" for="email">Type</label>
            <select name='proType' id="type" class='form-control' value="{{ $data->product_type }}">
                @foreach ($modelType as $d)
                    <option value="{{ $d->id }}">{{ $d->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
