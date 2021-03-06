@extends('frontend/layouts/base')


@section('MainContentFrontend')






<!-- Start Category Area -->
<section class="htc__category__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">New Arrivals</h2>
                    <p>But I must explain to you how all this mistaken idea</p>
                </div>
            </div>
        </div>
        <div class="htc__product__container">
            <div class="row">
                <div class="product__list clearfix mt--30">
                    <!-- Start Single Category -->
                    @foreach ($products as $new_product)

                    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="{{url('/details').'/'.$new_product['id']}}">
                                    <img src="{{asset('frontend')}}/images/product/1.jpg" alt="product images">
                                    {{-- <img src="{{$new_product['gallery']}}" /> --}}
                                </a>
                            </div>
                            <div class="fr__hover__info">
                                <ul class="product__action">
                                    <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                    <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                    <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="fr__product__inner">
                                <h4><a href="product-details.html">{{$new_product->name}}</a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize">$30.3</li>
                                    <li>${{$new_product->price}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Category -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Category Area -->








@endsection







