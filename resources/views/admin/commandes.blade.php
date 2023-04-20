@extends('layouts.appadmin')
@section('contenu')

      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Commandes client</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Ordre #</th>
                        <th>Nom du client</th>
                        <th>Adresse</th>
                        <th>panier</th>
                        <th>Paiement id</th>
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
                            <button class="btn btn-outline-primary">Editer</button>
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
