@extends('layout.conquer')
@section('content')
    <h2>Edit Brand Fashion</h2>

    </p>
    <form method="POST" action="{{ route('brands.update', $data->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleEmail">Name of Brand</label>
            <input type="text" name="name" class="form-control" id="nameProduct" aria-describedby="nameHelp"
                placeholder="Enter Name of Brand" value="{{ $data->brand_name }}">
            <label for="exampleEmail">Address of Brand</label>
            <input type="text" name="address" class="form-control" id="priceProduct" aria-describedby="nameHelp"
                placeholder="Enter Address of Brand" value="{{ $data->brand_address }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
