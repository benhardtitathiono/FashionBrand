<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop | Fashion Brand</title>
    <link href="{{ asset('Eshopper/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Eshopper/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Eshopper/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('Eshopper/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('Eshopper/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('Eshopper/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('Eshopper/css/responsive.css') }}" rel="stylesheet">
	<link href="{{ asset('Eshopper/css/indexpublic.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico ') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('Eshopper/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('Eshopper/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('Eshopper/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed"
        href="{{ asset('Eshopper/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="/cart"><i class="fa fa-shopping-cart"></i>Cart</a></li>

								@can('access-permission')
								<a href="/products">Dashboard</a></li>
								@endcan<li >
								<li>
									<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">

                                @can('access-permission')
                                    <li><a href="/products">Dashboard</a></li>
                                @endcan
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">

                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li>
                                    <a href="#" class="active">Shop</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
							@foreach ($cat as $c)
                            <div class="panel panel-default">
                                <div class="panel-heading">
									
                                    <h4 class="panel-title"> 
                                    	{{ $c->category_name }}   
                                    </h4>
									
                                </div>
                            </div>
							@endforeach
                        </div>
                        <!--/category-productsr-->

                        <div class="brands_products">
                            <!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">

                                @foreach ($brand as $b)
                                    <ul class="nav nav-pills nav-stacked">
                                        <li>{{ $b->brand_name }}</li>
                                    </ul>
                                @endforeach
                            </div>
                        </div>
                        <!--/brands_products-->


                    </div>
                </div>

                <div class="col-sm-9 padding-left">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Features Items</h2>

                        @foreach ($data as $d)
                            <div class="col-md-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{ asset('images/' . $d->image_product) }}" alt="" />
                                            <h2>Rp {{ $d->product_price }}</h2>
                                            <p>{{ $d->product_name }}</p>
                                            <a href="{{ route('addToCart', $d->id) }}"
                                                class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>Rp {{ $d->product_price }}</h2>
                                                <p>{{ $d->product_name }}</p>
                                                <a href="#modaldetails" data-toggle="modal"
                                                    class="btn btn-warning btn-xs"
                                                    onclick="getDetails({{ $d->id }})">Details</a><br><br>
                                                <a href="{{ route('addToCart', $d->id) }}"
                                                    class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="modal fade" id="modaldetails" tabindex="-1" role="basic" aria-hidden="true">
                            <div class="modal-dialog modal-wide">
                                <div class="modal-content">
                                    <div class="modal-body" id="modalContent">
                                        <!--loading animated gif can put here-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--features_items-->

                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('Eshopper/js/jquery.js') }}"></script>
    <script src="{{ asset('Eshopper/js/price-range.js') }}"></script>
    <script src="{{ asset('Eshopper/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('Eshopper/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Eshopper/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('Eshopper/js/main.js') }}"></script>
</body>

</html>
@section('javascript')
    <script>
        function getDetails(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('product.details') }}",
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'id': id
                },
                success: function(data) {
                    $('#modalContent').html(data.msg)
                }
            });
        }
    </script>
