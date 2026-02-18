@extends('frontend.main_master')

@section('title') A completer
@endsection

@section('description') A completer @endsection

@section('content')

    <!-- Breadscrumb Section -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Checkout</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class=""><a href="{{ route('accueil') }}">Home</a></li>
                            <span style="color: white">&nbsp; /&nbsp; </span>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadscrumb Section -->

    <!-- Booking Success -->
    <div class="booking-new-module">
        <div class="container">
            <div class="booking-wizard-head">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-3">
                        <div class="booking-head-title">
                            <h4>Reserve Your Car</h4>
                            <p>Complete the following steps</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div class="booking-wizard-lists">
                            <ul>
                                <li class="active activated">
                                    <span><img src="assets/img/icons/booking-head-icon-01.svg" alt="Booking Icon"></span>
                                    <h6>Location & Time</h6>
                                </li>
                                <li class="active activated">
                                    <span><img src="assets/img/icons/booking-head-icon-02.svg" alt="Booking Icon"></span>
                                    <h6>Add-Ons</h6>
                                </li>
                                <li class="active activated">
                                    <span><img src="assets/img/icons/booking-head-icon-03.svg" alt="Booking Icon"></span>
                                    <h6>Detail</h6>
                                </li>
                                <li class="active activated">
                                    <span><img src="assets/img/icons/booking-head-icon-04.svg" alt="Booking Icon"></span>
                                    <h6>Checkout</h6>
                                </li>
                                <li class="active">
                                    <span><img src="assets/img/icons/booking-head-icon-05.svg" alt="Booking Icon"></span>
                                    <h6>Booking Confirmed</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="booking-card">
                <div class="success-book">
						<span class="success-icon">
							<i class="fa-solid fa-check-double"></i>
						</span>
                    <h5>Thank you! Your Order has been Recieved</h5>
                    <h5 class="order-no">Order Number : <span>#123456</span></h5>
                </div>
                <div class="booking-header">
                    <div class="booking-img-wrap">
                        <div class="book-img">
                            <img src="assets/img/cars/car-05.jpg" alt="img">
                        </div>
                        <div class="book-info">
                            <h6>Chevrolet Camaro</h6>
                            <p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
                        </div>
                    </div>
                    <div class="book-amount">
                        <p>Total Amount</p>
                        <h6>$4700</h6>
                    </div>
                </div>

            </div>
            <div class="print-btn text-center">
                <a href="javascript:void(0);" class="btn btn-secondary">Print Order</a>
            </div>
        </div>

    </div>
    <!-- /Booking Success -->

@endsection

