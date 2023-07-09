@extends('layout.conquer')
@section('content')
    <h2>Add New Brand</h2>

    </p>
    <form method="POST" action="{{ route('brands.store') }}">
        @csrf
        <div class="form-group">
            <label class="col-label col-sm-2" for="exampleEmail">Name of Brand</label>
            <input type="text" name="name" class="form-control" id="nameProduct" aria-describedby="nameHelp"
                placeholder="Enter Name of Product">
            <label class="col-label col-sm-2" for="exampleEmail">Address of Brand</label>
            <input type="text" name="address" class="form-control" id="pricePro" aria-describedby="nameHelp"
                placeholder="Enter Price of Product">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
