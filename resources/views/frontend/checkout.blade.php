@extends('frontend/layouts/base')

@section('MainContentFrontend')



        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">checkout</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="checkout-wrap ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="checkout__inner">

                            <form action="/orderplace" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group">
                                      <label for="">Name</label>
                                      <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="First Name">
                                      <small id="helpId" class="form-text text-muted">Help text</small>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Email</label>
                                      <input type="text" class="form-control" name="email" id="" aria-describedby="helpId2" placeholder="Email Name">
                                      <small id="helpId2" class="form-text text-muted">Help text</small>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Shipping Address</label>
                                      <input type="text" class="form-control" name="address" id="" aria-describedby="helpId3" placeholder="First Name">
                                      <small id="helpId3" class="form-text text-muted">Help text</small>
                                    </div>
                                    <div class="form-group">
                                      <label for="">Order Status</label>
                                      <input type="text" class="form-control" name="status" id="" aria-describedby="helpId4" placeholder="First Name">
                                      <small id="helpId4" class="form-text text-muted">Help text</small>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="payment" id="" value="bkash" /> Bkash <br>
                                            <input type="radio" class="form-check-input" name="payment" id="" value="rocket" /> Rocket <br>
                                            <input type="radio" class="form-check-input" name="payment" id="" value="hand" /> HandCash
                                      </label>
                                    </div>
                                    <button type="submit" name="" id="" class="btn btn-primary btn-lg btn-block">Payment Now</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="order-details">
                            <h5 class="order-details__title">Your Order</h5>
                            <div class="order-details__item">
                                <div class="single-item">
                                    <div class="single-item__thumb">
                                        <img src="images/cart/1.png" alt="ordered item">
                                    </div>
                                    <div class="single-item__content">
                                        <a href="#">Santa fe jacket for men</a>
                                        <span class="price">$128</span>
                                    </div>
                                    <div class="single-item__remove">
                                        <a href="#"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="single-item__thumb">
                                        <img src="images/cart/2.png" alt="ordered item">
                                    </div>
                                    <div class="single-item__content">
                                        <a href="#">Santa fe jacket for men</a>
                                        <span class="price">$128</span>
                                    </div>
                                    <div class="single-item__remove">
                                        <a href="#"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="order-details__count">
                                <div class="order-details__count__single">
                                    <h5>sub total</h5>
                                    <span class="price">${{$total}}</span>
                                </div>
                                <div class="order-details__count__single">
                                    <h5>Tax</h5>
                                    <span class="price">$9.00</span>
                                </div>
                            </div>
                            <div class="ordre-details__total">
                                <h5>Order total</h5>
                                <span class="price">${{$total + 9}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->



@endsection
