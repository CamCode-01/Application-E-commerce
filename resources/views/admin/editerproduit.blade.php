@extends('layouts.appadmin')

@section('contenu')
        <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter un produit</h4>

                  @if (Session::has('statut'))
                  <div class="alert alert-success">
                      {{Session::get('statut')}}
                  </div>

            @endif

            @if (count($errors)> 0)
            
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                          <li>
                              {{$error}}
                          </li>
                          @endforeach
                      </ul>
                  </div>

            @endif

                    {!!Form::open(['action' => 'App\Http\Controllers\ProductController@sauverproduit', 'method' => 'POST','class' => 'cmxform', 'id' => 'commentForm','enctype'=>'multipart/form-data'])!!}
                    {{ csrf_field() }}
                      <div class="form-group">
                        {{Form::label('', 'Nom du produit', ['for' => 'cname'])}}
                        {{Form::text('nom_produit', $produit->nom_produit, ['class' => 'form-control', 'id' => 'cname' ])}}
                      </div>

                      <div class="form-group">
                        {{Form::label('', 'Prix du produit', ['for' => 'cname'])}}
                        {{Form::number('prix_produit', $produit->prix_produit, ['class' => 'form-control', 'id' => 'cname' ])}}
                      </div>

                      <div class="form-group">
                            {{Form::label('', 'Catégorie du produit')}}
                            {{Form::select('categorie_produit', $categories,  $produit->categorie_produit,['class'=>'form-control'])}}
                     </div>

                      <div class="form-group">
                        {{Form::label('', 'image', ['for' => 'cname'])}}
                        {{Form::file('image_produit', ['class' => 'form-control', 'id' => 'cname' ])}}
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
    {{-- <script src="backend/js/form-validation.js"></script>
    <script src="backend/js/bt-maxLength.js"></script> --}}
  <!-- End custom js for this page-->

@endsection
