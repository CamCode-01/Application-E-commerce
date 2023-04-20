@extends('layouts.appadmin')
@section('contenu')

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
                    <tr>
                        <td>1</td>
                        <td>2012/08/03</td>
                        <td>2012/08/03</td>
                        <td>2012/08/03</td>
                        <td>2012/08/03</td>
                    <td>
                          <label class="badge badge-info">On hold</label>
                        </td>


                        <td>
                            <button class="btn btn-outline-primary">Modifier</button>
                            <button class="btn btn-outline-danger">Supprimer</button>
                          </td>
                    </tr>
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
