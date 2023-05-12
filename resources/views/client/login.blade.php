
@extends('layouts.auth')


@section('authentification')

@if (Session::has('statut'))
            <div class="alert alert-danger">
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



				<form class="login100-form validate-form" action="{{url('/acceder_compte')}}" method="POST">
                    {{ csrf_field() }}
					<span class="login100-form-title">
						se connecter
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="mot de pass">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							connexion
						</button>
					</div>

					<div class="text-center p-t-12">
						<a class="txt2" href="#">
							mot de passe oublié ?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="{{URL::to('/singnup')}}">
							Creer un Compte
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>




        @endsection

