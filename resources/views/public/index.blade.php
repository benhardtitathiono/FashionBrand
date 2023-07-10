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
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" />
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
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        @foreach ($cat as $c)
                                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                                <span class="badge pull-right"></span>
                                                {{ $c->category_name }}
                                            </a>
                                            <br></br>
                                        @endforeach
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!--/category-productsr-->

                        <div class="brands_products">
                            <!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">

                                @foreach ($brand as $b)
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href=""> {{ $b->brand_name }}</a></li>
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
                                                <a href="{{ route('addToCart', $d->id) }}"
                                                    class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!--features_items-->

                    <ul class="pagination">
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">&raquo;</a></li>
                    </ul>

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
