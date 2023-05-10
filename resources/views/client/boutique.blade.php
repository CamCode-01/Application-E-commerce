@extends('layouts.app')

@section('contenu')


    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2><b><i>Notre Boutique</i></b></h2>
                    </div>

                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area1">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main1">
                                    <li class="active1 {{(request()->is('boutique') ? 'actu' : '')}}"> <a href="{{URL::to('/boutique')}}">Voir tout</a></li>
                                    @foreach ($categories as $categorie)
                                        <li class="active1 {{(request()->is('select_par_cat/'.$categorie->nom_categorie) ? 'actu' : '')}}"> <a href="select_par_cat/{{$categorie->nom_categorie}}">{{$categorie->nom_categorie}}</a></li>
                                    @endforeach

                                    <li class="last">
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- brand -->
    <div class="brand">
        <div class="container">

        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                    @foreach ($produits as $produit)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">

                        <div class="brand_box">
                            <img src="storage/images_produit/{{$produit->image_produit}}" alt="img" />
                            <h3><strong class="red">{{$produit->prix_produit}}</strong>fcfa</h3>
                            <span>{{$produit->nom_produit}}</span>
                            <i><img src="{{asset('frontend/images/star.png')}}"/></i>
                            <i><img src="{{asset('frontend/images/star.png')}}"/></i>
                            <i><img src="{{asset('frontend/images/star.png')}}"/></i>
                            <i><img src="{{asset('frontend/images/star.png')}}"/></i>
                        </div>

                    </div>
                     @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- end brand -->

   @endsection
