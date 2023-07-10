<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
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
                            <a href="index.html"><img src="{{ asset('Eshopper/images/home/logo.png') }}"
                                    alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">

                                <li><a href="cart.html" class="active"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								@can('access-permission')
								<a href="/products">Dashboard</a></li>
								@endcan<li >
								<li>
									<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/product-page">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
						@php
						$total = 0;
						@endphp
                        @if (session('cart'))
                            @foreach (session('cart') as $d => $details)
                                @php
                                    $total += $details['price'];
                                @endphp
                                <tr>
                                    <td class="cart_product">
                                        <a href=""><img src="images/{{ $details['photo'] }}"
                                                alt=""></a>
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href="">{{ $details['name'] }}</a></h4>
                                    </td>
                                    <td class="cart_price">
                                        <p>Rp {{ $details['price'] }}</p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">
                                            <input class="cart_quantity_input" type="text" name="quantity"
                                                value="{{ $details['quantity'] }}" autocomplete="off"
                                                size="2">
                                        </div>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">Rp {{ $details['price'] * $details['quantity'] }}
                                        </p>
                                    </td>
                                    <td class="cart_delete">
                                        <a class="cart_quantity_delete" href=""><i
                                                class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Cart Total <span>Rp. {{ $total }}</span></li>
                        </ul>
                        <a class="btn btn-default update" href="">Update</a>
                        <a class="btn btn-default check_out" href="">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#do_action-->

    <script src="{{ asset('Eshopper/js/jquery.js') }}"></script>

    <script src="{{ asset('Eshopper/js/jquery.scrollUp.min.js') }}"></script>

    <script src="{{ asset('Eshopper/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('Eshopper/js/jquery.prettyPhoto.js') }}"></script>

    <script src="{{ asset('Eshopper/js/main.js') }}"></script>

</body>

</html>
