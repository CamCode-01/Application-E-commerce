@extends('layouts.appadmin')
@section('contenu')
{{Form::hidden('',$increment=1)}}


      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Produits</h4>
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
                            <button class="btn btn-outline-primary">Modifier</button>
                            <button class="btn btn-outline-danger">Supprimer</button>
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
