
@extends('layouts.auth')


@section('authentification')



				<form class="login100-form validate-form" action="">
					<span class="login100-form-title">
						Creer un Compte
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid name is required">
						<input class="input100" type="text" name="nom" placeholder="Votre Nom">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="mot de pass">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="confpass" placeholder="Confirmer">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Creer
						</button>
					</div>


					<div class="text-center p-t-136">
						<a class="txt2" href="{{URL::to('/logi')}}">
							J'ai déjà un compte
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>




        @endsection

