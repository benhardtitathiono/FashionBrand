@extends('layout.conquer')
@section('content')
    <h2>Add New Category Fashion</h2>

    </p>
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <div class="form-group">
            <label class="col-label col-sm-2" for="exampleEmail">Name of Categories</label>
            <input type="text" name="nameCate" class="form-control" id="nameProduct" aria-describedby="nameHelp"
                placeholder="Enter Name of Categories">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
