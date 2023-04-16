@extends('layouts.appadmin')

@section('contenu')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter Categorie</h4>
                    {!!Form::open(['action' => 'App\Http\Controllers\CategorieController@sauvercategorie', 'method' => 'POST','class' => 'cmxform', 'id' => 'commentForm'])!!}
                    {{ csrf_field() }}
                      <div class="form-group">
                        {{Form::label('', 'Nom de la categorie', ['for' => 'cname'])}}
                        {{Form::text('nom_categorie', '', ['class' => 'form-control', 'id' => 'cname' ])}}
                      </div>
                        {!!Form::submit('ajouter',['class' => 'btn btn-primary'])!!}
                     {!!Form::close()!!}

                </div>
              </div>
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
