@extends('layout.conquer')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>

        <div class="container">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <a href="{{ route('products.create') }}" class="btn btn-success"> + New Product</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Dimension</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->product_name }}</td>
                            <td>Rp. {{ $d->product_price }}</td>
                            <td>{{ $d->product_dimension }}</td>
                            <td>{{ $d->category->category_name }}</td>
                            <td>{{ $d->brand->brand_name }}</td>
                            <td>{{ $d->type->name }}</td>
                            {{-- <td>
                                <a href="{{ route('products.edit', $d->id) }}" class="btn btn-success">Edit</a>
                                <form method="POST" action="{{ route('products.destroy', $d->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger"
                                        onClick="return confirm('Do You agree to delete with {{ $d->id }}-{{ $d->name }}?');">
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </body>

    </html>
@endsection
