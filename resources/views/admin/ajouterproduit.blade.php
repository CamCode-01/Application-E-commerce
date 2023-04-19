@extends('layouts.appadmin')

@section('contenu')
        <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter un produit</h4>
                    {!!Form::open(['action' => 'App\Http\Controllers\ProductController@sauverproduit', 'method' => 'POST','class' => 'cmxform', 'id' => 'commentForm'])!!}
                    {{ csrf_field() }}
                      <div class="form-group">
                        {{Form::label('', 'Nom du produit', ['for' => 'cname'])}}
                        {{Form::text('nom_produit', '', ['class' => 'form-control', 'id' => 'cname' ])}}
                      </div>

                      <div class="form-group">
                        {{Form::label('', 'Prix du produit', ['for' => 'cname'])}}
                        {{Form::number('prix_produit', '', ['class' => 'form-control', 'id' => 'cname' ])}}
                      </div>

                      <div class="form-group">
                            {{Form::label('', 'Catégorie du produit')}}
                            {{--Form::select('categorie_produit', $categories, null, ['placeholder' => 'form-control'])--}}
                      </div>

                      <div class="form-group">
                        {{Form::label('', 'image', ['for' => 'cname'])}}
                        {{Form::file('prix_image', ['class' => 'form-control', 'id' => 'cname' ])}}
                      </div>
                      {!!Form::submit('ajouter',['class' => 'btn btn-primary'])!!}
                     {!!Form::close()!!}

                </div>
              </div>
            </div>
          </div>



@endsection

@section('scripts')

  <!-- Custom js for this page-->
    <script src="backend/js/form-validation.js"></script>
    <script src="backend/js/bt-maxLength.js"></script>
  <!-- End custom js for this page-->

@endsection
