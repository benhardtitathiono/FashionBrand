<form method="POST" action="{{ route('products.update', $data->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="exampleInputEmail1">Product Name</label>
        <h1>{{ $data->product_name }}</h1>
        <label for="exampleInputEmail1">Product Price</label>
        <h1>{{ $data->product_price }}</h1>
        <label for="exampleInputEmail1">Product Dimension</label>
        <h1> {{ $data->product_dimension }}</h1>
        <label for="exampleInputEmail1">Product Brand</label>
        <h1> {{ $data->product_brand }}</h1>
        <label for="exampleInputEmail1">Product Category</label>
        <h1> {{ $data->product_category }}</h1>
        <label for="exampleInputEmail1">Product Type</label>
        <h1> {{ $data->product_type }}</h1>

    </div>
</form>
