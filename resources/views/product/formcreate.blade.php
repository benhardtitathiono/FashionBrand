@extends('layout.conquer')
@section('content')
    <h2>Add New Product Fashion</h2>
    <p>Our Product here....

    </p>
    <form method="POST" enctype="multipart/form-data" role="form" action="{{ route('products.store') }}">
        @csrf
        <div class="form-group">
            <label class="col-label col-sm-2" for="exampleEmail">Name of Product</label>
            <input type="text" name="namePro" class="form-control" id="nameProduct" aria-describedby="nameHelp"
                placeholder="Enter Name of Product">
            <label class="col-label col-sm-2" for="exampleEmail">Price</label>
            <input type="text" name="price" class="form-control" id="pricePro" aria-describedby="nameHelp"
                placeholder="Enter Price of Product">
            <label class="col-label col-sm-2" for="email">Category</label>
            <select name='category' id="cate" class='form-control'>
                @foreach ($modelCat as $d)
                    <option value="{{ $d->id }}">{{ $d->category_name }}</option>
                @endforeach
            </select>
            <label class="col-label col-sm-2" for="email">Brand</label>
            <select name='brand' id="supp" class='form-control'>
                @foreach ($modelBrand as $d)
                    <option value="{{ $d->id }}">{{ $d->brand_name }}</option>
                @endforeach
            </select>
            <label class="col-label col-sm-2" for="email">Type</label>
            <select name='type' id="supp" class='form-control'>
                @foreach ($modelType as $d)
                    <option value="{{ $d->id }}">{{ $d->name }}</option>
                @endforeach
            </select>
            <label class="col-label col-sm-2">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
