@extends('layouts.appadmin')

@section('contenu')
        <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter un slider</h4>
                    {!!Form::open(['action' => 'App\Http\Controllers\SliderController@sauverslider', 'method' => 'POST','class' => 'cmxform', 'id' => 'commentForm'])!!}
                    {{ csrf_field() }}
                      <div class="form-group">
                        {{Form::label('', 'Description  one', ['for' => 'cname'])}}
                        {{Form::text('description1', '', ['class' => 'form-control', 'id' => 'cname' ])}}
                      </div>

                      <div class="form-group">
                        {{Form::label('', 'Description two', ['for' => 'cname'])}}
                        {{Form::text('description2', '', ['class' => 'form-control', 'id' => 'cname' ])}}
                      </div>

                      <div class="form-group">
                        {{Form::label('', 'Image', ['for' => 'cname'])}}
                        {{Form::file('slider_image', ['class' => 'form-control', 'id' => 'cname' ])}}
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
