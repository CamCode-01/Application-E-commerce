@extends('layouts.app')

@section('contenu')
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/paiement/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/paiement/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/paiement/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/paiement/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/paiement/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/paiement/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/paiement/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/paiement/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/paiement/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('frontend/paiement/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/paiement/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/paiement/css/style.css') }}">


    </head>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 ftco-animate">
                    <form action="{{ url('/payer') }}" class="billing-form" method="POST" id="checkout-form">
                        {{ csrf_field() }}
                        <h3 class="mb-4 billing-heading text-center">Billing Details</h3>
                        @if (Session::has('error'))

                        <div class="alert alert-danger">
                            {{Session::get('error')}}
                            {{Session::put('error',null)}}
                        </div>

                  @endif
                        <div class="row align-items-end">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="firstname">Full Name</label>
                                    <input type="text" class="form-control" placeholder="" name="name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="lastname">Address</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="towncity">Name on Card</label>
                                    <input type="text" class="form-control" placeholder=""id="card-name"
                                        name="card_name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="postcodezip">number</label>
                                    <input type="text" class="form-control" placeholder="" id="card-number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="postcodezip">Expiration Month</label>
                                    <input type="text" class="form-control" placeholder="" id="card-espiry-month">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="postcodezip">Expiration Year</label>
                                    <input type="text" class="form-control" placeholder="" id="card-espiry-year">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="postcodezip">CVC</label>
                                    <input type="text" class="form-control" placeholder="" id="card-cvc">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Acheter">
                                </div>

                            </div>
                        </div>
                    </form><!-- END -->
                </div>
                <div class="col-xl-5">
                    <div class="row mt-5 pt-3">
                        <div class="col-md-12 d-flex mb-5">
                            <div class="cart-detail cart-total p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Cart Total</h3>
                                <p class="d-flex">
                                    <span>Subtotal</span>
                                    <span>$20.60</span>
                                </p>
                                <p class="d-flex">
                                    <span>Delivery</span>
                                    <span>$0.00</span>
                                </p>
                                <p class="d-flex">
                                    <span>Discount</span>
                                    <span>$3.00</span>
                                </p>
                                <hr>
                                <p class="d-flex total-price">
                                    <span>Total</span>
                                    <span>$17.60</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->




    <script src="https://js.stripe.com/v2/"></script>
    <script src="src/js/checkout.js"></script>



    <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>



    <script src="{{ asset('frontend/paiement/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/paiement/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('frontend/paiement/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/paiement/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/paiement/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frontend/paiement/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/paiement/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('frontend/paiement/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/paiement/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/paiement/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/paiement/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('frontend/paiement/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('frontend/paiement/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('frontend/paiement/js/google-map.js') }}"></script>
    <script src="{{ asset('frontend/paiement/js/main.js') }}"></script>


@endsection
