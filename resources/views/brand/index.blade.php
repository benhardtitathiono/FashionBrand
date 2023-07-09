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
            @can('access-permission')
                <a href="{{ route('brands.create') }}" class="btn btn-success"> + New Brand</a>
            @endcan
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Product</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->brand_name }}</td>
                            <td>{{ $d->brand_address }}</td>
                            <td>
                                <a class="btn btn-info" onClick="showProduct({{ $d->id }})">Product</a>
                            </td>
                            <td>
                                @can('access-permission', $d)
                                    <a href="{{ route('brands.edit', $d->id) }}" class="btn btn-success">Edit</a>
                                @endcan
                                @can('delete-permission', $d)
                                    <form method="POST" action="{{ route('brands.destroy', $d->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-danger"
                                            onClick="return confirm('Do You agree to delete with {{ $d->id }}-{{ $d->name }}?');">
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </body>

    </html>
@endsection
