@extends('layout.conquer')
@section('content')
    <h2>Edit Categories Fashion</h2>

    </p>
    <form method="POST" action="{{ route('categories.update', $data->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleEmail">Name of Product</label>
            <input type="text" name="nameCate" class="form-control" id="nameProduct" aria-describedby="nameHelp"
                placeholder="Enter Name of Category" value="{{ $data->category_name }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
