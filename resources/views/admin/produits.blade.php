@extends('layouts.appadmin')
@section('contenu')
{{Form::hidden('',$increment=1)}}


      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Produits</h4>

          @if (Session::has('statut'))
            <div class="alert alert-success">
                {{Session::get('statut')}}
            </div>

           @endif

          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Ordre #</th>
                        <th>Image</th>
                        <th>Nom du produit</th>
                        <th>Catégorie du produit</th>
                        <th>Prix</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($produits as $produit)
                    <tr>
                        <td>{{$increment}}</td>
                        <td>{{$produit->image_produit}}</td>
                        <td>{{$produit->nom_produit}}</td>
                        <td>{{$produit->categorie_produit}}</td>
                        <td>{{$produit->prix_produit}}</td>
                    <td>
                        @if ($produit->statut==1)
                            <label class="badge badge-success">Activé</label>

                            @else
                                <label class="badge badge-danger">Désactivé</label>
                        @endif

                        </td>
                        <td>
                            <button class="btn btn-outline-primary" onclick="window.location = '{{url('/editer_produit/'.$produit->id)}}'">Modifier</button>
                            <a href="{{url('/supprimerproduit/'.$produit->id)}}" id="delete" class="btn btn-outline-danger">Supprimer</a>

                        @if ($produit->statut==1)
                             <button class="btn btn-outline-warning" onclick="window.location = '{{url('/desactiver_produit/'.$produit->id)}}'">Desactiver</button>

                            @else
                            <button class="btn btn-outline-success" onclick="window.location = '{{url('/activer_produit/'.$produit->id)}}'">Activer</button>

                        @endif
                        </td>
                    </tr>
                    {{Form::hidden('',$increment= $increment + 1)}}

                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection
@section('scripts')
        <script src="{{asset('backend/js/data-table.js')}}"></script>
@endsection
