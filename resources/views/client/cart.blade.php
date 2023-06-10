@extends('layouts.app')
@section('contenu')

<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('frontend/paiement/css/open-iconic-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/paiement/css/animate.css')}}">

<link rel="stylesheet" href="{{asset('frontend/paiement/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/paiement/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/paiement/css/magnific-popup.css')}}">

<link rel="stylesheet" href="{{asset('frontend/paiement/css/aos.css')}}">

<link rel="stylesheet" href="{{asset('frontend/paiement/css/ionicons.min.css')}}">

<link rel="stylesheet" href="{{asset('frontend/paiement/css/bootstrap-datepicker.css')}}">
<link rel="stylesheet" href="{{asset('frontend/paiement/css/jquery.timepicker.css')}}">


<link rel="stylesheet" href="{{asset('frontend/paiement/css/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('frontend/paiement/css/icomoon.css')}}">
<link rel="stylesheet" href="{{asset('frontend/paiement/css/style.css')}}">
</head>


<section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                          <tr class="text-center">
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>Nom Produit</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Total</th>
                          </tr>
                        </thead>
                        @if (Session::has('cart'))
                        <tbody>
                            @foreach ($produits as $produit)

                                <tr class="text-center">
                                    <td class="product-remove"><a href="retirer_produit/{{$produit['id_produit']}}"><span class="ion-ios-close"></span></a></td>

                                    <td class="image-prod"><div class="img" style="background-image:url(storage/images_produit/{{$produit['image_produit']}});"></div></td>

                                    <td class="product-name">
                                        <h3>{{$produit['nom_produit']}}</h3>
                                        <p>Far far away, behind the word mountains, far from the countries</p>
                                    </td>

                                    <td class="price">{{$produit['prix_produit']}}</td>

                                    <form action="{{url('/modifier_qty/'.$produit['id_produit'])}}" method="POST">
                                        {{ csrf_field() }}
                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                            <input type="number" name="quantity" class="quantity form-control input-number" value="{{$produit['qty']}}" min="1">
                                        </div>
                                        <input type="submit" value="Modifier" class="btn btn-success">
                                        </td>
                                    </form>




                                    <td class="total">{{$produit['prix_produit']*$produit['qty']}}fcfa</td>

                            @endforeach

                          </tr><!-- END TR-->
                        </tbody>


                        @else
                            @if(Session::has('status'))
                            <div class="alert alert-success">
                                {{Session::get('status')}}
                            </div>
                            @endif
                            @endif
                      </table>
                  </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Coupon Code</h3>
                    <p>Enter your coupon code if you have one</p>
                      <form action="#" class="info">
              <div class="form-group">
                  <label for="">Coupon code</label>
                <input type="text" class="form-control text-left px-3" placeholder="">
              </div>
            </form>
                </div>
                <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
            </div>
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Estimate shipping and tax</h3>
                    <p>Enter your destination to get a shipping estimate</p>
                      <form action="#" class="info">
              <div class="form-group">
                  <label for="">Country</label>
                <input type="text" class="form-control text-left px-3" placeholder="">
              </div>
              <div class="form-group">
                  <label for="country">State/Province</label>
                <input type="text" class="form-control text-left px-3" placeholder="">
              </div>
              <div class="form-group">
                  <label for="country">Zip/Postal Code</label>
                <input type="text" class="form-control text-left px-3" placeholder="">
              </div>
            </form>
                </div>
                <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p>
            </div>
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex">
                        <span>Subtotal</span>
                        <span>0.00fcfa</span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery</span>
                        <span>0.00fcfa</span>
                    </p>
                    <p class="d-flex">
                        <span>Discount</span>
                        <span>0.00fcfa</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        @if(Session::has('cart') && isset(Session::get('cart')->totalPrice))
                        <span>{{Session::get('cart')->totalPrice}}fcfa</span>
                        @endif
                    </p>
                </div>
                <p><a href="{{URL::to('/paiement')}}" class="btn btn-primary py-3 px-4">Proceder au paiement</a></p>
            </div>
        </div>
        </div>
    </section>

<script src="{{asset('frontend/paiement/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/paiement/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('frontend/paiement/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/paiement/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/paiement/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('frontend/paiement/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('frontend/paiement/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('frontend/paiement/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/paiement/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/paiement/js/aos.js')}}"></script>
<script src="{{asset('frontend/paiement/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('frontend/paiement/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('frontend/paiement/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('frontend/paiement/js/google-map.js')}}"></script>
<script src="{{asset('frontend/paiement/js/main.js')}}"></script>

<script>
    $(document).ready(function(){

    var quantitiy=0;
       $('.quantity-right-plus').click(function(e){

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

        });

         $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

                // Increment
                if(quantity>0){
                $('#quantity').val(quantity - 1);
                }
        });

    });
</script>

@endsection
